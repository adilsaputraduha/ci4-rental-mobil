<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    public function getCustomer()
    {
        $bulder = $this->db->table('tabel_penyewa');
        return $bulder->get();
    }
    public function saveCustomer($data)
    {
        $query = $this->db->table('tabel_penyewa')->insert($data);
        return $query;
    }
    public function updateCustomer($data, $id)
    {
        $query = $this->db->table('tabel_penyewa')->update($data, array('penyewa_id' => $id));
        return $query;
    }
    public function deleteCustomer($id)
    {
        $query = $this->db->table('tabel_penyewa')->delete(array('penyewa_id' => $id));
        return $query;
    }
}
