<?php

namespace App\Models;

use CodeIgniter\Model;

class CarsDetail_model extends Model
{
    public function getDetail()
    {
        return  $this->db->table('tabel_mobil')
            ->join('tabel_merk', 'tabel_mobil.mobil_id_merk = tabel_merk.merk_id')
            ->join('tabel_jenis', 'tabel_mobil.mobil_id_jenis = tabel_jenis.jenis_id')
            ->get()->getresultArray();
    }
    public function saveDetail($data)
    {
        $query = $this->db->table('tabel_mobil')->insert($data);
        return $query;
    }
    public function deleteDetail($id)
    {
        $query = $this->db->table('tabel_mobil')->delete(array('mobil_id' => $id));
        return $query;
    }
    public function updateDetail($data, $id)
    {
        $query = $this->db->table('tabel_mobil')->update($data, array('mobil_id' => $id));
        return $query;
    }
}
