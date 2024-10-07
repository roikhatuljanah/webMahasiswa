<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Barang_model;

class Barang extends Controller
{
    public function index()
    {
        $model = new Barang_model();
        $data['title'] = 'Data Barang';
        $data['getBarang'] = $model->getBarang();
        echo view('headerView', $data);
        echo view('barangView', $data);
        echo view('footerView', $data);
    }

    public function cetak()
    {
        $model = new Barang_model();
        $data['title'] = 'Data Barang';
        $data['getBarang'] = $model->getBarang();
        echo view('headerView', $data);
        echo view('cetakView', $data);
        echo view('footerView', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Barang';
        echo view('headerView', $data);
        echo view('tambahView', $data);
        echo view('footerView', $data);
    }

    public function add()
    {
        $model = new Barang_model();
        $data = array(
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'web2' => $this->request->getPost('web2'),
            'bindo' => $this->request->getPost('bindo'),
            'bing' => $this->request->getPost('bing'),
            'pbo' => $this->request->getPost('pbo'),
        );
        $model->saveBarang($data);
        echo '<script>
            alert("Sukses Tambah Data Barang");
            window.location="' . base_url('barang') . '"
        </script>';
    }

    public function edit($nim)
{
    $model = new Barang_model();
    $getBarang = $model->getBarang($nim); // Removed ->getRow()
    if ($getBarang !== null) {
        $data['barang'] = $getBarang;
        $data['title'] = 'Edit ' . $getBarang['nim']; // Updated property access

        echo view('headerView', $data);
        echo view('editView', $data);
        echo view('footerView', $data);
    } else {
        echo '<script>
            alert("ID barang ' . $nim . ' Tidak Ditemukan");
            window.location="' . base_url('barang') . '"
            </script>';
    }
}


    public function update()
    {
        $model = new Barang_model();
        $nim = $this->request->getPost('nim');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'web2' => $this->request->getPost('web2'),
            'bindo' => $this->request->getPost('bindo'),
            'bing' => $this->request->getPost('bing'),
            'pbo' => $this->request->getPost('pbo'),
        );
        $model->editBarang($data, $nim);
        echo '<script>
            alert("Sukses Edit Data Barang");
            window.location="' . base_url('barang') . '"
        </script>';
    }

    public function hapus($nim)
{
    $model = new Barang_model();
    $getBarang = $model->getBarang($nim); // Removed ->getRow()
    if ($getBarang !== null) {
        $model->hapusBarang($nim);
        echo '<script>
            alert("Hapus data barang sukses");
            window.location="' . base_url('barang') . '"
            </script>';
    } else {
        echo '<script>
            alert("Hapus gagal, ID barang ' . $nim . ' tidak ditemukan");
            window.location="' . base_url('barang') . '"
            </script>';
    }
}


}
