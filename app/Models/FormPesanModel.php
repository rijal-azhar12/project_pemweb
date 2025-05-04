<?php

namespace App\Models;

use CodeIgniter\Model;

class FormPesanModel extends Model
{
    protected $table = 'form_pesan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'telepon', 'pesan'];
    protected $useTimestamps = true;
    protected $createdField = 'tanggal';
    protected $updatedField = 'updated_at';

    // app/Models/FormPesanModel.php
    public function getPesan()
    {
        return $this->orderBy('tanggal', 'DESC')->findAll(); // Urutkan dari terbaru
    }
}