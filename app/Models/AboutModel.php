<?php
namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about';
    protected $allowedFields = ['file_path', 'alt_text', 'section', 'description'];
}