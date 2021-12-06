<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        //echo "ini adalah halaman registrasi";
        echo view('register_view', $data);
    }
    public function submitRegister()
    {
        //validasi input
        if(!$this->validate([
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'namadepan' => 'required|alpha',
            'namabelakang' => 'alpha',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }

        //buat model untuk proses insert ke tabel user
        $model = new UsersModel();
        $password = $this->request->getVar('password');
        $cpassword = $this->request->getVar('cpassword');
        if(strcmp($password, $cpassword) == 0) {
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'namadepan' => $this->request->getVar('namadepan'),
                'namabelakang' => $this->request->getVar('namabelakang'),
            ];
            echo $model->insert($data);
            return redirect()->to(base_url('dashboard'));
            //if ($model->insert($data)) {
            //    return redirect()->to('/login');
            //}
            //else {
            //  echo "data tidak berhasil disimpan";   
            //}
        }
        else {
            return redirect()->back()->withInput();
        }

    }
}
