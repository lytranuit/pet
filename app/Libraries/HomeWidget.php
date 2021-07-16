<?php

namespace App\Libraries;

class HomeWidget
{
    private $data = array();
    private $view = "";
    public function __construct()
    {
        $router = service('router');
    }
    public function slider()
    {
        $slider_model = model("SliderModel");
        $banner_model = model("BannerModel");
        $this->data['sliders'] = $slider_model->orderby("order", "Asc")->findAll();
        $this->data['banners'] = $banner_model->orderby("order", "Asc")->findAll();
        return view("frontend/home/_" . __FUNCTION__, $this->data);
    }

    public function category()
    {
        //return 1;
        $category_model = model("CategoryModel");
        $product_model = model("ProductModel");
        $list_category = $category_model->where(array('is_home' => 1, 'parent_id' => 0))->orderBy('order', 'ASC')->asObject()->findAll();
        foreach ($list_category as &$row) {
            $proudct_info = $product_model->get_product_by_category($row->id);
            $row->products = $proudct_info['products'];
            $row->count_product = $proudct_info['count_product'];
            $row->child = $proudct_info['child'];
            // $row->products = $this->->with_units()->with_price_km()->with_image()->limit(10)->get_all();

            // if (!empty($row->products)) {
            //     foreach ($row->products as &$row_format) {
            //         $row_format = $this->product_model->format($row_format);
            //     }
            // }
            /* COUNT PRODUCT */
            // $row->count_product = $this->product_model->where("status = 1 and is_foodzone = 1 and FIND_IN_SET('$my_region',region) AND category_id = $row->id", null, null, null, null, true)->join("fz_product_category", "id", "product_id")->count_rows();
        }
        $this->data['categories'] = $list_category;
        // echo "<pre>";
        // print_r($list_category);
        // die();
        return view("frontend/home/_" . __FUNCTION__, $this->data);
    }
    public function tag()
    {
        //return 1;
        $tag_model = model("TagModel");
        $news_model = model("NewsModel");
        $list_tag = $tag_model->where(array('is_home' => 1))->orderBy('date', 'DESC')->asObject()->findAll();
        foreach ($list_tag as &$row) {
            $info = $news_model->get_news_by_tag($row->id);
            $row->news = $info['news'];
            $row->count = $info['count'];
            // $row->products = $this->->with_units()->with_price_km()->with_image()->limit(10)->get_all();

            // if (!empty($row->products)) {
            //     foreach ($row->products as &$row_format) {
            //         $row_format = $this->product_model->format($row_format);
            //     }
            // }
            /* COUNT PRODUCT */
            // $row->count_product = $this->product_model->where("status = 1 and is_foodzone = 1 and FIND_IN_SET('$my_region',region) AND category_id = $row->id", null, null, null, null, true)->join("fz_product_category", "id", "product_id")->count_rows();
        }
        $this->data['tags'] = $list_tag;
        // echo "<pre>";
        // print_r($list_category);
        // die();
        return view("frontend/home/_" . __FUNCTION__, $this->data);
    }
    public function feature()
    {
        //return 1;
        $tag_model = model("TagModel");
        $this->data['dinh_duong'] = $tag_model->where(array('id' => 6))->asObject()->first();
        $this->data['huan_luyen'] = $tag_model->where(array('id' => 5))->asObject()->first();
        $this->data['doi_song'] = $tag_model->where(array('id' => 7))->asObject()->first();
        $this->data['hoi_dap'] = $tag_model->where(array('id' => 8))->asObject()->first();


        // echo "<pre>";
        // print_r($list_category);
        // die();
        return view("frontend/home/_" . __FUNCTION__, $this->data);
    }
}
