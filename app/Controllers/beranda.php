<?php 
namespace App\Controllers;

use App\Models\BerandaModel; 

class Beranda extends BaseController
{
    public function index()
    {
        $model = new BerandaModel();
        
        $data = [
            'title' => 'CV HS Jaya Abadi',
            'features' => $model->where('section', 'features')->findAll(),  
            'services' => $model->where('section', 'services')->findAll()  
        ];

        return view('beranda', $data);
    }
}