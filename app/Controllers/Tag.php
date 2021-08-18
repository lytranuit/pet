<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseBuilder;

class Tag extends BaseController
{
    public function index()
    {
        return view($this->data['content'], $this->data);
    }
    //--------------------------------------------------------------------
    public function view($id)
    {
        $tag_model = model("TagModel");
        $news_model = model("NewsModel");

        $this->data['tag'] = $tag_model->find($id);
        // print_r($sort);
        // die();

        $pager = service('pager');
        $perPage = 20;
        $page = (int)(($this->request->getVar('page') !== null) ? $this->request->getVar('page') : 1);
        $info = $news_model->get_news_by_tag($id, $perPage, $page);

        $total = $info['count'];
        $pager->makeLinks($page, $perPage, $total);
        $this->data['news'] = $info['news'];




        $this->data['title'] =  $this->data['tag']->{pick_language($this->data['tag'])} . $this->data['title'];
        // echo "<pre>";
        // print_r($this->data['newss']);
        // die();
        return view($this->data['content'], $this->data);
    }
}
