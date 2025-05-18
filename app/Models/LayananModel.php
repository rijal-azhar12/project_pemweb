<?php
namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model {
    protected $table = 'layanan';
    protected $allowedFields = ['file_path', 'alt_text', 'title', 'location', 'description', 'section', 'whatsapp_link'];
    
    public function getPopularDestinations() {
        return $this->where('section', 'destinasi_populer')->findAll();
    }
    
    public function getMainServices() {
        return $this->where('section', 'layanan_utama')->findAll();
    }
}