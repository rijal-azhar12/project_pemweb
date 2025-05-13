<?php

namespace App\Controllers;

class galeri extends BaseController
{
    public function index()
    {
        $data['galeri'] = 'Bismillah - CV HS Jaya Abadi';
        return view('galeri', $data);
    }
}
