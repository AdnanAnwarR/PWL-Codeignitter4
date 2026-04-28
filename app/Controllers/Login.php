<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Login'
        ];
        return view('login.php',$data);
    }

    function auth(){
        $d_email = "user@example.com";
        $d_password = "test1234";
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if($d_email == $email AND $d_password == $password){
            $datauser = [
                'user_id' =>1,
                "email" => $email,
                'isLogin' => true
            ];
            session()->set($datauser);
            session()->set('member','premium');
            
            return redirect()->to("/");
        }else{
            echo "not found";
        }
    }
    

    function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
