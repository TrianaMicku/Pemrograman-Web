<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        echo view ('login_view');
    }

    public function logout() {
        session()->destroy();
        session()->setFlashdata("error","Anda berhasil logout");
        return redirect()->to(base_url('login'));
    }

    public function submitLogin() {
        $model = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('username',$username)->first();
        if($data) {
            if (password_verify($password, $data['password'])) {
                session()->set([
                    'namadepan' => $data['namadepan'],
                    'namabelakang' => $data['namabelakang'],
                    'logged_in' => TRUE,
                ]);
                return redirect()->to('/dashboard');
            }
            else {
                session()->setFlashdata("error","Username/Password salah");
                return redirect()->back();
            }
        }
        else {
            session()->setFlashdata("error","Username/Password salah");
            return redirect()->back();
        }
    }
}
