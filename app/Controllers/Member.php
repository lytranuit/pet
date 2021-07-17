<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseBuilder;

class Member extends BaseController
{
    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!

        $id_user = user_id();
        $user_model = model("Usermodel");
        $user =  $user_model->where(array('id' => $id_user))->asObject()->first();
        $this->data['user'] = $user;
    }
    public function index()
    {
        $id_user = user_id();
        $user_model = model("Usermodel");
        if (isset($_POST['edit_user'])) {
            $additional_data = array(
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost("address")
            );
            $user_model->update($id_user, $additional_data);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            $this->data['title'] = lang("Custom.Custom.info") . $this->data['title'];

            return view($this->data['content'], $this->data);
        }
    }

    function history()
    {
        $id_user = user_id();
        $sale_model = model("SaleModel");
        $sale_line_model = model("SaleLineModel");

        $data = $sale_model->where(array('user_id' => $id_user, 'deleted' => 0))->orderBy("id", "DESC")->findAll();
        $this->data['title'] = lang("Custom.Custom.history_order") . $this->data['title'];
        $this->data['data'] = $data;
        return view($this->data['content'], $this->data);
    }

    function order_detail($code)
    {

        $sale_model = model("SaleModel");
        $product_model = model("ProductModel");

        $data = $sale_model->where(array('code' => $code))->asObject()->first();
        $sale_model->relation($data, array("details"));
        foreach ($data->details as &$row) {
            $product = $product_model->where(array('id' => $row->product_id))->asObject()->first();
            $product = $product_model->format_product($product);
            $row->product = $product;
        }
        $this->data['data'] = $data;
        // echo "<pre>";
        // print_r($this->data['data']);
        // die();
        return view($this->data['content'], $this->data);
    }

    function huy_don($code)
    {
        $sale_model = model("SaleModel");
        $sale = $sale_model->where(array('code' => $code))->asObject()->first();
        if (!$sale || (isset($sale->status) && $sale->status == 1))
            $sale_model->where(array('code' => $code))->set(['status' => 5])->update();
        return redirect()->to(base_url('member/history'));
    }
    function changepass()
    {
        $id_user = user_id();
        $users = model(UserModel::class);

        if (!isset($_POST['confirmpassword']) || !isset($_POST['newpassword']) || (isset($_POST['newpassword']) && isset($_POST['confirmpassword']) && $_POST['newpassword'] != $_POST['confirmpassword'])) {
            echo json_encode(array('code' => 403, "msg" => lang("Custom.password_change_unsuccessful_confirmpassword")));
            die();
        }
        $user = $users->where('id', $id_user)
            ->first();
        $user->password         = $this->request->getPost('newpassword');
        $user->reset_hash         = null;
        $user->reset_at         = date('Y-m-d H:i:s');
        $user->reset_expires    = null;
        $user->force_pass_reset = false;
        $users->save($user);
        echo json_encode(array('code' => 400, "msg" => lang("Custom.password_change_successful")));
        die();
    }
    //--------------------------------------------------------------------

}
