<?php namespace App\Controllers;

use App\Models\AboutModel;

class About extends BaseController
{
    public function index()
    {
        $model = new AboutModel();
        
        $data = [
            'title' => 'Tentang - CV HS Jaya Abadi',
            'historyImage' => $model->where('section', 'history')->first(),
            'fleetImage' => $model->where('section', 'fleet')->first()
        ];
        
        return view('about', $data);
    }
}