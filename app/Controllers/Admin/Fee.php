<?php

namespace App\Controllers\Admin;

use App\Models\FileModel;

class Fee extends BaseController
{
    public function index()
    { /////// trang ca nhan
        // load_datatable($this->data);
        $area_model = model("AreaModel");
        $list = $area_model->orderBy("order", "ASC")->asArray()->findAll();
        // echo "<pre>";
        // print_r($list);
        // die();
        $groups = array_values(array_filter($list, function ($item) {
            return $item['parent_id'] == 0;
        }));
        foreach ($groups as &$group) {
            $group['child'] = array_values(array_filter($list, function ($item) use ($group) {
                return $item['parent_id'] == $group['id'];
            }));
        }
        $this->data['areas'] = $groups;
        load_sort_nest($this->data);
        return view($this->data['content'], $this->data);
    }
    public function add()
    { /////// trang ca nhan
        if (isset($_POST['dangtin'])) {
            $data = $_POST;
            $area_model = model("AreaModel");
            $data_up = $area_model->create_object($data);
            $id = $area_model->insert($data_up);

            $area_fee_model = model("AreaFeeModel");
            // print_r($data['dvt']);
            // die();
            if (isset($data['fee'])) {
                foreach ($data['fee'] as $row) {
                    $array = array(
                        'area_id' => $id
                    );
                    $area_fee_model->update($row, $array);
                }
            }
            return redirect()->to(base_url('admin/fee'));
        } else {
            load_datatable($this->data);
            return view($this->data['content'], $this->data);
        }
    }

    public function edit($id)
    { /////// trang ca nhan
        if (isset($_POST['dangtin'])) {
            $area_model = model("AreaModel");
            $data = $_POST;
            $data_up = $area_model->create_object($data);
            $area_model->update($id, $data_up);

            $area_fee_model = model("AreaFeeModel");
            if (isset($data['fee'])) {
                foreach ($data['fee'] as $row) {
                    $array = array(
                        'area_id' => $id
                    );
                    $up = $area_fee_model->update($row, $array);
                }
            }
            return redirect()->to(base_url('admin/fee'));
        } else {
            $area_model = model("AreaModel");
            $tin = $area_model->where(array('id' => $id))->asArray()->first();

            $area_model->relation($tin, array('fee'));
            $this->data['tin'] = $tin;
            // echo "<pre>";
            // print_r($tin);
            // die();
            load_datatable($this->data);
            return view($this->data['content'], $this->data);
        }
    }

    function saveorderarea()
    {
        $area_model = model("AreaModel");
        $data = json_decode($this->request->getPost('data'), true);
        foreach ($data as $key => $row) {
            if (isset($row['id'])) {
                $id = $row['id'];
                $parent_id = isset($row['parent_id']) ? $row['parent_id'] : 0;
                $array = array(
                    'order' => $key,
                    'parent_id' => $parent_id
                );
                $area_model->update($id, $array);
            }
        }
    }
    public function remove($id)
    { /////// trang ca nhan
        $AreaModel = model("AreaModel");
        $AreaModel->delete($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    public function save_fee()
    {
        if (isset($_POST['cap_nhat'])) {
            $data = $_POST;
            $id = $data['id'];
            $area_fee_model = model("AreaFeeModel");
            $data_up = $area_fee_model->create_object($data);
            if ($id > 0) {
                unset($data_up['id']);
                $area_fee_model->update($id, $data_up);
            } else {
                if (isset($data_up['id']))
                    unset($data_up['id']);
                $id = $area_fee_model->insert($data_up);
            }
            $unit = $area_fee_model->find($id);
            echo json_encode($unit);
        }
    }
}
