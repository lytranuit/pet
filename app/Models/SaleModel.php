<?php

namespace App\Models;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Model;

class SaleModel extends Model
{
    protected $table      = 'sale_order';
    protected $primaryKey = 'id';

    protected $returnType     = 'App\Entities\Sale';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['code', 'address_id', 'order_date', 'customer_name', 'customer_phone', 'customer_email', 'customer_address', 'receiver_name', 'receiver_phone', 'receiver_email', 'receiver_address', 'receiver_area', 'inv_tax_code', 'inv_name', 'inv_address', 'customer_id', 'amount', 'discount', 'service_fee', 'total_amount', 'paid_amount', 'notes', 'status', 'payment_type', 'delivery_date', 'type', 'region', 'language'];




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
