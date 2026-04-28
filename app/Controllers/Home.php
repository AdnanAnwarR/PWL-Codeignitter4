<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'beranda',
            'content' => view('default')
        ];
        return view('v_produk',$data);
    }

    function produk()
    {
        $data = [
            'content' => view('v_produk')
        ];
        return view('v_produk',$data);
    }

    function keranjang()
    {
        return view('v_keranjang');
    }
}
