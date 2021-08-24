<?php

namespace App\Models;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'pet_news';
    protected $primaryKey = 'id';

    protected $returnType     = 'App\Entities\News';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['slug', 'title_vi', 'title_en', 'title_jp', 'content_vi', 'content_en', 'content_jp', 'date', 'user_id', 'image_url'];



    public function relation(&$data, $relation = array())
    {
        $type = gettype($data);
        if ($type == "array" && !isset($data['id'])) {
            foreach ($data as &$row) {
                $row = $this->format_row($row, $relation);
            }
        } else {
            $data = $this->format_row($data, $relation);
        }

        return $data;
    }
    function format_row($row_a, $relation)
    {
        if (gettype($row_a) == "object") {
            if (in_array("tag", $relation)) {
                $news_id = $row_a->id;
                $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.cateogry_id = pet_tag.id");
                $row_a->tags = $builder->where('news_id', $news_id)->orderBy("order", "ASC")->get()->getResult();
            }
        } else {
            if (in_array("tag", $relation)) {
                $news_id = $row_a['id'];
                $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.cateogry_id = pet_tag.id");
                $row_a['tags'] = $builder->where('news_id', $news_id)->orderBy("order", "ASC")->get()->getResult("array");
            }
        }
        return $row_a;
    }

    public function get_news_related($id, $tags)
    {
        if (empty($tags)) {
            return array();
        }
        $builder = $this->db->table("pet_news");
        $builder->whereIn('id', function (BaseBuilder $builder) use ($tags) {
            return $builder->select('news_id')->from('pet_news_tag')->whereIn('tag_id', $tags);
        });
        return $builder->where("deleted_at", NULL)->where("deleted", 0)->where('id !=', $id)->get()->getResult();
    }
    public function get_news($tag_id = 0, $keyword = "", $offset = 0, $limit = 20)
    {
        $builder = $this->db->table("pet_news");

        if ($tag_id > 0) {
            $builder->whereIn('id', function (BaseBuilder $builder) use ($tag_id) {
                return $builder->select('news_id')->from('pet_news_tag')->where('tag_id', $tag_id);
            });
        }
        if ($keyword != "") {
            $builder->groupStart();
            $builder->like('code', $keyword);
            $builder->orLike("title_" . current_language(), $keyword);
            $builder->groupEnd();
        }
        //print_r($builder->where("deleted_at", NULL)->where("deleted", 0)->orderBy("id", "DESC")->limit($limit, $offset)->getCompiledSelect());
        //die();
        return $builder->where("deleted_at", NULL)->where("deleted", 0)->orderBy("id", "DESC")->limit($limit, $offset)->get()->getResult();
    }
    function get_news_by_tag($tag_id, $perPage = 10, $page = 1)
    {

        $offset = ($page - 1) * $perPage;
        $builder = $this->db->table('pet_news')->join("pet_news_tag", "pet_news_tag.news_id = pet_news.id");
        $count = $builder->where("tag_id = $tag_id and deleted_at IS NULL")->countAllResults();




        $builder = $this->db->table('pet_news')->join("pet_news_tag", "pet_news_tag.news_id = pet_news.id")->select('pet_news.*');
        $news = $builder->where("tag_id = $tag_id and deleted_at IS NULL")->orderBy("pet_news.date", "DESC")->limit($perPage, $offset)->get()->getResult();



        // echo "<pre>";
        // print_r($count);
        // die();
        $return = array(
            'count' => $count,
            'news' => $news,
        );
        return $return;
    }
    function create_object($data)
    {
        $db = $this->db;
        $array = $db->getFieldNames($this->table);
        $obj = array();
        foreach ($array as $key) {
            if (isset($data[$key])) {
                if ($key == "price" || $key == "quantity" || $key == "retail_price" || $key == "min" || $key == "max" || $key == "fee") {
                    $obj[$key] = str_replace(",", "", $data[$key]);
                    $obj[$key] = (float) str_replace(" VND", "", $obj[$key]);
                } else
                    $obj[$key] = $data[$key];
            } else
                continue;
        }

        return $obj;
    }
    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    protected $skipValidation     = true;
}
