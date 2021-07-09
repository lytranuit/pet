<?php

namespace App\Models;


use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
    protected $table      = 'pet_product_category';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['product_id', 'category_id', 'order'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = true;
    public function product_by_category($id)
    {

        $builder = $this->db->table('pet_product_category');
        $builder->select('*,pet_product_category.id as pc_id');
        return $builder->where(array('category_id' => $id))->orderby('pet_product_category.order', "ASC")->join('product', 'product.id = pet_product_category.product_id')->get()->getResult();
    }
}
