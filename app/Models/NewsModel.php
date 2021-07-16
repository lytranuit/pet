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
                if (gettype($row) == "object") {

                    if (in_array("user", $relation)) {
                        $user_id = $row->user_id;
                        $builder = $this->db->table('users');
                        $row->user = $builder->where('id', $user_id)->limit(1)->get()->getFirstRow();
                        if (in_array("user_image", $relation)) {
                            $image_id = $row->user->image_id;
                            $builder = $this->db->table('cf_file');
                            $row->user->image = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow();
                        }
                    }
                    //if (in_array("image_other", $relation)) {
                    //    $news_id = $row->id;
                    //    $builder = $this->db->table('cf_news_image')->join("cf_file", "cf_news_image.image_id = cf_file.id");
                    //    $row->image_other = $builder->where('news_id', $news_id)->get()->getResult();
                    //}
                    if (in_array("tags", $relation)) {
                        $news_id = $row->id;
                        $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.tag_id = pet_tag.id");
                        $row->tags = $builder->where('news_id', $news_id)->get()->getResult();
                    }
                } else {
                    if (in_array("user", $relation)) {
                        $user_id = $row['user_id'];
                        $builder = $this->db->table('users');
                        $row['user'] = $builder->where('id', $user_id)->limit(1)->get()->getFirstRow();
                        if (in_array("user_image", $relation)) {
                            $image_id = $row['user']['image_id'];
                            $builder = $this->db->table('cf_file');
                            $row['user']['image'] = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow("array");
                        }
                    }
                    //if (in_array("image_other", $relation)) {
                    //    $news_id = $row['id'];
                    //    $builder = $this->db->table('cf_news_image')->join("cf_file", "cf_news_image.image_id = cf_file.id");
                    //    $row['image_other'] = $builder->where('news_id', $news_id)->get()->getResult("array");
                    //}
                    if (in_array("tags", $relation)) {
                        $news_id = $row['id'];
                        $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.tag_id = pet_tag.id");
                        $row['tags'] = $builder->where('news_id', $news_id)->get()->getResult("array");
                    }
                }
            }
        } elseif ($type == "array" && isset($data['id'])) {

            if (in_array("user", $relation)) {
                $user_id = $data['user_id'];
                $builder = $this->db->table('users');
                $data['user'] = $builder->where('id', $user_id)->limit(1)->get()->getFirstRow();
                if (in_array("user_image", $relation)) {
                    $image_id = $data['user']['image_id'];
                    $builder = $this->db->table('cf_file');
                    $data['user']['image'] = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow('array');
                }
            }
            //if (in_array("image_other", $relation)) {
            //    $news_id = $data['id'];
            //    $builder = $this->db->table('cf_news_image')->join("cf_file", "cf_news_image.image_id = cf_file.id");
            //    $data['image_other'] = $builder->where('news_id', $news_id)->get()->getResult("array");
            //}
            if (in_array("tags", $relation)) {
                $news_id = $data['id'];
                $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.tag_id = pet_tag.id");
                $data['tags'] = $builder->where('news_id', $news_id)->get()->getResult("array");
            }
        } else {

            if (in_array("user", $relation)) {
                $user_id = $data->user_id;
                $builder = $this->db->table('users');
                $data->user = $builder->where('id', $user_id)->limit(1)->get()->getFirstRow();
                if (in_array("user_image", $relation)) {
                    $image_id = $data->user->image_id;
                    $builder = $this->db->table('cf_file');
                    $data->user->image = $builder->where('id', $image_id)->limit(1)->get()->getFirstRow();
                }
            }
            //if (in_array("image_other", $relation)) {
            //    $news_id = $data->id;
            //    $builder = $this->db->table('cf_news_image')->join("cf_file", "cf_news_image.image_id = cf_file.id");
            //    $data->image_other = $builder->where('news_id', $news_id)->get()->getResult();
            //}
            if (in_array("tags", $relation)) {
                $news_id = $data->id;
                $builder = $this->db->table('pet_news_tag')->join("pet_tag", "pet_news_tag.tag_id = pet_tag.id");
                $data->tags = $builder->where('news_id', $news_id)->get()->getResult();
            }
        }
        return $data;
    }


    public function get_news_related($id, $tags)
    {
        if (empty($tags)) {
            return array();
        }
        $builder = $this->db->table("cf_news");
        $builder->whereIn('id', function (BaseBuilder $builder) use ($tags) {
            return $builder->select('news_id')->from('pet_news_tag')->whereIn('tag_id', $tags);
        });
        return $builder->where("deleted_at", NULL)->where("deleted", 0)->where('id !=', $id)->get()->getResult();
    }
    public function get_news($tag_id = 0, $keyword = "", $offset = 0, $limit = 20)
    {
        $builder = $this->db->table("cf_news");

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




        $builder = $this->db->table('pet_news')->join("pet_news_tag", "pet_news_tag.news_id = pet_news.id");
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
