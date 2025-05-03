<?php namespace App\Controllers;

class kontak extends BaseController
{
    public function index()
    {
        $data['title'] = 'Contact us - CV HS Jaya Abadi';
        return view('kontak', $data);
    }
}