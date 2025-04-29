<?php 

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data['title'] = 'CV HS Jaya Abadi';
        return view('beranda', $data);
    }
}
