<?php

namespace App\Models;

use CodeIgniter\Model;

class Rental_model extends Model
{
    public function getRental()
    {
        return $this->db->table('tabel_sewa')
            ->join('tabel_penyewa', 'tabel_sewa.sewa_id_penyewa = tabel_penyewa.penyewa_id')
            ->join('tabel_mobil', 'tabel_sewa.sewa_id_mobil = tabel_mobil.mobil_id')
            ->join('tabel_merk', 'tabel_merk.merk_id = tabel_mobil.mobil_id_merk')
            ->get()->getresultArray();
    }

    public function saveRental($data)
    {
        $query = $this->db->table('tabel_sewa')->insert($data);
        return $query;
    }
    // public function updateCustomer($data, $id)
    // {
    //     $query = $this->db->table('tabel_penyewa')->update($data, array('penyewa_id' => $id));
    //     return $query;
    // }
    // public function deleteCustomer($id)
    // {
    //     $query = $this->db->table('tabel_penyewa')->delete(array('penyewa_id' => $id));
    //     return $query;
    // }
}
