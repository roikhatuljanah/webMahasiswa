<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_model extends Model
{
    protected $table = 'nilai';

    public function getBarang($nim = null)
{
    if ($nim === null) {
        return $this->findAll(); // Change to findAll()
    } else {
        return $this->where('nim', $nim)->first(); // Change to where() and first()
    }
}


    public function saveBarang($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editBarang($data, $nim)
    {
        $builder = $this->db->table($this->table);
        $builder->where('nim', $nim);
        return $builder->update($data);
    }

    public function hapusBarang($nim)
    {
        $builder = $this->db->table($this->table);
        return $builder->where('nim', $nim)->delete();
    }
}
