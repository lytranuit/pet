<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseBuilder;

class Member extends BaseController
{
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
            $user =  $user_model->where(array('id' => $id_user))->asObject()->first();
            $this->data['user'] = $user;
            return view($this->data['content'], $this->data);
        }
    }
    public function history()
    {
        return view($this->data['content'], $this->data);
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
