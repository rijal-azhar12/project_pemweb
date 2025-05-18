<?php
namespace App\Models;

use CodeIgniter\Model;

class BerandaModel extends Model
{
    protected $table = 'beranda'; 
    protected $allowedFields = ['file_path', 'alt_text', 'section', 'title', 'description'];
}