<?php

namespace App\Models;

use CodeIgniter\Model;

class Account_model extends Model
{
    public function getMerk()
    {
        $bulder = $this->db->table('tabel_merk');
        return $bulder->get();
    }
    // public function saveMerk($data)
    // {
    //     $query = $this->db->table('tabel_merk')->insert($data);
    //     return $query;
    // }
    // public function deleteMerk($id)
    // {
    //     $query = $this->db->table('tabel_merk')->delete(array('merk_id' => $id));
    //     return $query;
    // }
    // public function updateMerk($data, $id)
    // {
    //     $query = $this->db->table('tabel_merk')->update($data, array('merk_id' => $id));
    //     return $query;
    // }
}
