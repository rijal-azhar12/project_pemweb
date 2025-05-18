<?php 
namespace App\Controllers;

use App\Models\LayananModel;

class Layanan extends BaseController {
    public function index() {
        $model = new LayananModel();
        
        $data = [
            'title' => 'Layanan - CV HS Jaya Abadi',
            'destinations' => $model->where('section', 'destinasi_populer')->findAll()
        ];
        
        return view('layanan', $data);
    }
}