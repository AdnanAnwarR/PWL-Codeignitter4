<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index(){
        return view('v_home');
    }
    
    // public function index($name = null)
    // {
    //     $text = 'Hello World';
    //     if(!is_null($name)){
    //         $text .= $name . $this->angka(8);
    //     };
    //     echo $text;
    // }

    // function angka($angka){
    //     return $angka*$angka;
    // }
}
