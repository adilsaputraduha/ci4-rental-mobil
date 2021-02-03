<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    public function getProduct()
    {
        return  $this->db->table('tabel_mobil')
            ->join('tabel_merk', 'tabel_mobil.mobil_id_merk = tabel_merk.merk_id')
            ->join('tabel_jenis', 'tabel_mobil.mobil_id_jenis = tabel_jenis.jenis_id')
            ->get()->getresultArray();
    }

    public function getProductDetail($id)
    {
        return  $this->db->table('tabel_mobil')
            ->join('tabel_merk', 'tabel_mobil.mobil_id_merk = tabel_merk.merk_id')
            ->join('tabel_jenis', 'tabel_mobil.mobil_id_jenis = tabel_jenis.jenis_id')
            ->where(array('mobil_id' => $id))
            ->get()->getresultArray();
    }
    // public function saveType($data)
    // {
    //     $query = $this->db->table('tabel_jenis')->insert($data);
    //     return $query;
    // }
    // public function updateType($data, $id)
    // {
    //     $query = $this->db->table('tabel_jenis')->update($data, array('jenis_id' => $id));
    //     return $query;
    // }
    // public function deleteType($id)
    // {
    //     $query = $this->db->table('tabel_jenis')->delete(array('jenis_id' => $id));
    //     return $query;
    // }
}
