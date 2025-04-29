<?php namespace App\Controllers;

class Layanan extends BaseController
{
    public function index()
    {
        $data['title'] = 'Layanan - CV HS Jaya Abadi';
        return view('layanan', $data);
    }
}