<?php

namespace App\Controllers;


class Cart extends BaseController
{
    public function index()
    {
        $this->data['cart'] = sync_cart();
        // print_r($this->data['cart']);
        // die();
        $this->data['title'] =  lang("Custom.cart_title") . $this->data['title'];
        return view($this->data['content'], $this->data);
    }

    public function total_order()
    {
        $this->data['cart'] = sync_cart();

        return view($this->data['content'], $this->data);
    }

    public function checkout()
    {
        if (logged_in()) {

            $address_model = model("AddressModel");
            $user_id = user_id();
            $address = $address_model->where(array("user_id" => $user_id))->findAll();
            $address_model->relation($address, array("area"));
            // echo "<pre>";
            // print_r(user());
            // die();

            $this->data['user'] = user();
            $this->data['address'] = $address;
        }

        $area_model = model("AreaModel");
        $my_region = area_current();
        $list = $area_model->where(array('region' => $my_region))->orderBy("order", "ASC")->asArray()->findAll();
        // echo "<pre>";
        // print_r($list);
        // die();
        if (empty($list))
            $list = array();

        $groups = array_values(array_filter($list, function ($item) {
            return $item['parent_id'] == 0;
        }));
        foreach ($groups as &$group) {
            $group['child'] = array_values(array_filter($list, function ($item) use ($group) {
                return $item['parent_id'] == $group['id'];
            }));
        }

        $this->data['group_area'] = $groups;
        $this->data['cart'] = sync_cart();

        $this->data['title'] =  lang("Custom.order_title") . $this->data['title'];
        return view($this->data['content'], $this->data);
    }
    function complete()
    {
        $cart = sync_cart();
        if (isset($_POST) && count($_POST) && count($cart['details'])) {

            $address_model = model("AddressModel");
            $area_model = model("AreaModel");
            $sale_model = model("SaleModel");
            $sale_line_model = model("SaleLineModel");
            $language = \Config\Services::language();
            $short_lang =  $language->getLocale();
            $array = $_POST;

            $area_id = isset($array['area_id']) ? $array['area_id'] : 0;
            $area = $area_model->get($area_id);
            // echo "<pre>";
            // print_r($cart['details']);
            // die();
            $array['amount'] = $cart['amount_product'];
            $array['service_fee'] = $cart['service_fee'] > 0 ? $cart['service_fee'] : 0;
            $array['total_amount'] = $cart['paid_amount'];
            $array['is_send'] = 0;
            // $array['data_fz'] = json_encode($cart);
            // $data = $this->sale_model->create_object($array);
            // // echo "<pre>";
            // // print_r($data);
            // // die();
            // $order_id = $this->sale_model->insert($data);
            // $this->sale_model->where("id", $order_id)->update(array("code" => "FOZ-$order_id"));

            ///UPDATE SIMBA
            $array['order_date'] = date("Y-m-d H:i:s");
            // $array['delivery_date'] = date("Y-m-d");
            $array['code'] = "PET" . date("YmdHisz");
            $array['type'] = 7;
            $array['language'] =  $short_lang;
            $array['customer_name'] = $array['name'];
            $array['customer_phone'] =  $array['phone'];
            $array['customer_email'] =  $array['email'];
            $array['customer_address'] =  $array['address'];

            $array['receiver_name'] = $array['name'];
            $array['receiver_phone'] =  $array['phone'];
            $array['receiver_email'] =  $array['email'];
            $array['receiver_address'] =  $array['address'];
            $array['receiver_area'] =  isset($area->name) ? $area->name : "";

            if (isset($array['flag_inv']) && $array['flag_inv'] == 1) {
            } else {
                $array['inv_name'] = "";
                $array['inv_address'] = "";
                $array['inv_tax_code'] = "";
            }
            $array['customer_id'] =  7544;
            if (logged_in()) {
                $array['user_id'] =  user_id();
            }
            if (isset($array['address_id']) && $array['address_id'] > 0) {
                // $address_id = $array['address_id'];
                // $address = $this->address_model->get($address_id);

            } else {

                $data = $address_model->create_object($array);
                
                // echo "<pre>";
                // print_r($data);
                // die();
                $address_model->insert($data);
            }
            $data = $sale_model->create_object($array);
            $order_simba_id = $sale_model->insert($data);

            foreach ($cart['details'] as $row) {
                ///UPDATE SIMBA
                $data_up = array(
                    'order_id' => $order_simba_id,
                    'quantity' => $row->qty,
                    'unit_price' => $row->price,
                    'subtotal' => $row->amount,
                    'name' => $row->{pick_language($row)},
                    'code' => $row->code,
                    'product_id' => $row->id,
                    'image_url' => $row->image_url
                );

                if (isset($row->unit_id) && !empty($row->units)) {
                    $data_up['unit_id_fz'] = $row->unit_id;
                    $unit = array_values(array_filter($row->units, function ($item) use ($data_up) {
                        return $item->id == $data_up['unit_id_fz'];
                    }));
                    $unit = $unit[0];
                    $data_up['unit_price'] = $unit->special_unit > 0 ? round($data_up['subtotal'] / $unit->special_unit / $data_up['quantity'], 0) : 0;
                    $data_up['special_unit'] = $unit->special_unit;
                    $data_up['volume_order'] = $unit->name_vi;
                    $data_up['volume_order_en'] = $unit->name_en;
                    $data_up['volume_order_jp'] = $unit->name_jp;
                    $data_up['volume'] = $unit->{pick_language($unit)};
                }
                $sale_line_model->insert($data_up);
            }
            /////////////////
            helper('cookie');
            delete_cookie("DATA_CART");

            $this->data['cart'] = $cart;
            return view($this->data['content'], $this->data);
        } else {
            return redirect()->to(base_url());
        }
    }
}
