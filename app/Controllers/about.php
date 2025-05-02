<?php namespace App\Controllers;

class about extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tentang - CV HS Jaya Abadi';
        return view('about', $data);
    }
}