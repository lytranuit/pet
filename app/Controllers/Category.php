<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseBuilder;

class Category extends BaseController
{
    public function index()
    {
        return view($this->data['content'], $this->data);
    }
    //--------------------------------------------------------------------
    public function view($id)
    {
        $category_model = model("CategoryModel");
        $product_model = model("ProductModel");

        $this->data['category'] = $category_model->find($id);
        $sort = $this->request->getVar("sort");
        // print_r($sort);
        // die();

        $pager = service('pager');
        $perPage = 20;
        $page = (int)(($this->request->getVar('page') !== null) ? $this->request->getVar('page') : 1);
        $info = $product_model->get_product_by_category($id, $perPage, $page, $sort);

        $total = $info['count_product'];
        $pager->makeLinks($page, $perPage, $total);
        $this->data['products'] = $info['products'];
        $this->data['child'] = $info['child'];




        $this->data['title'] =  $this->data['category']->{pick_language($this->data['category'])} . $this->data['title'];
        $this->data['sort'] = $sort;
        // echo "<pre>";
        // print_r($this->data['products']);
        // die();
        return view($this->data['content'], $this->data);
    }
}
