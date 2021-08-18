<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseBuilder;

class Product extends BaseController
{
    public function index()
    {
        return view($this->data['content'], $this->data);
    }
    public function category($category_id)
    {
        $category_model = model("CategoryModel");
        $product_model = model("ProductModel");

        $this->data['category'] = $category_model->find($category_id);
        if ($this->data['category']->is_menu == 1) {
            $this->data['content'] = "frontend/product/menuview";
        } else {
            $this->data['content'] = "frontend/product/productview";
        }

        $this->data['products'] = $product_model->join('pet_product_category', 'pet_product_category.product_id = pet_product.id')->where("category_id", $category_id)->paginate(12);

        $this->data['pager'] = $product_model->join('pet_product_category', 'pet_product_category.product_id = pet_product.id')->where("category_id", $category_id)->pager;

        $product_model->image($this->data['products']);
        $this->data['title'] =   $this->data['category']->name_vi . $this->data['title'];

        // echo "<pre>";
        // print_r($this->data['products']);
        // die();
        return view($this->data['content'], $this->data);
    }

    //--------------------------------------------------------------------
    public function view($id)
    {
        $product_model = model("ProductModel");
        $product_category_model = model("ProductCategoryModel");
        $this->data['info'] = $product_model->asObject()->find($id);
        $product_model->relation($this->data['info'], array("image_other",'origin','preservation'));
        $product_model->format_product($this->data['info']);
        $categories = $product_category_model->where("product_id", $id)->asArray()->findAll();
        $categories = array_map(function ($item) {
            return $item['category_id'];
        }, $categories);
        // echo "<pre>";
        // print_r($this->data['info']);
        // die();
        $this->data['products'] = $product_model->get_product_related($id, $categories);
        foreach ($this->data['products'] as &$product) {
            $product_model->format_product($product);
        }
        //echo "<pre>";
        //print_r($this->data['products']);
        //die();

        $this->data['title'] =   $this->data['info']->{pick_language($this->data['info'])} . $this->data['title'];
        return view($this->data['content'], $this->data);
    }
    public function search()
    {

        $search = $this->request->getVar("q");
        $product_model = model("ProductModel");
        $my_region = area_current();
        $sql_where = "product.status = 1 and product.is_pet = 1 and FIND_IN_SET('$my_region',product.region)";
        if ($search != "") {
            $language = \Config\Services::language();
            $short_language =  $language->getLocale();
            $sql_where .= " AND (LOWER(pet_product.search_$short_language) like LOWER('%" . $search . "%') OR LOWER(product.code) LIKE LOWER('%$search%') OR LOWER(pet_product.name_$short_language) like LOWER('%" . $search . "%') OR (pet_product.code IS NULL AND LOWER(product.name_$short_language) like LOWER('%" . $search . "%')))";
        }
        $this->data['products'] = $product_model->join("pet_product", "code", "code")->select("product.*")->where($sql_where)->asObject()->paginate(20);
        foreach ($this->data['products'] as &$product) {
            $product_model->format_product($product);
        }
        // echo "<pre>";
        // print_r($this->data['products']);
        // die();
        $this->data['pager'] = $product_model->join("pet_product", "code", "code")->where($sql_where)->pager;

        $this->data['search'] = $search;
        $this->data['title'] = "Tìm kiếm : $search" . $this->data['title'];
        return view($this->data['content'], $this->data);
    }
    public function promotion()
    {

        $product_model = model("ProductModel");
        $my_region = area_current();
        $sql_where = "status = 1 and is_pet = 1 and FIND_IN_SET('$my_region',region) and id IN(SELECT product_id FROM pet_product_price WHERE NOW() BETWEEN date_from AND date_to AND deleted_at IS NULL)";
        $this->data['products'] = $product_model->where($sql_where)->asObject()->paginate(20);
        foreach ($this->data['products'] as &$product) {
            $product_model->format_product($product);
        }
        // echo "<pre>";
        // print_r($this->data['products']);
        // die();
        $this->data['pager'] = $product_model->where($sql_where)->pager;

        $this->data['title'] = lang("Custom.khuyen_mai") . $this->data['title'];
        return view($this->data['content'], $this->data);
    }
}
