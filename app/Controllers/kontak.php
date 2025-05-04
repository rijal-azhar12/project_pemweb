<?php

namespace App\Controllers;

use App\Models\FormPesanModel;

class Kontak extends BaseController
{
    public function index()
    {
        $model = new FormPesanModel();
        $data['pesan'] = $model->getPesan(); // Ambil semua pesan
        
        return view('kontak', $data); // Kirim data ke view
    }

    public function sendMessage()
    {
        $model = new FormPesanModel();

        $data = [
            'nama'    => $this->request->getPost('nama'),
            'email'   => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'pesan'   => $this->request->getPost('pesan')
        ];

        if ($model->save($data)) {
            return redirect()->to('/kontak')->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
    // app/Controllers/Kontak.php

    public function delete($id)
    {
        $model = new FormPesanModel();
        $model->delete($id);
        
        return redirect()->to('/kontak')->with('success', 'Pesan berhasil dihapus');
    }

    public function edit($id)
    {
        $model = new FormPesanModel();
        $data['pesan'] = $model->find($id); // Ambil data by ID
        
        return view('edit_pesan', $data); // Buat view untuk edit
    }

    public function update($id)
    {
        $model = new FormPesanModel();
        $data = [
            'nama'    => $this->request->getPost('nama'),
            'email'   => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'pesan'   => $this->request->getPost('pesan')
        ];
        
        $model->update($id, $data);
        return redirect()->to('/kontak')->with('success', 'Pesan berhasil diupdate');
    }
}