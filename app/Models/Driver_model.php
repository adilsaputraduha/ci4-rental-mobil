<?php

namespace App\Models;

use CodeIgniter\Model;

class Driver_model extends Model
{
    public function getDriver()
    {
        $bulder = $this->db->table('tabel_driver');
        return $bulder->get();
    }
    public function saveDriver($data)
    {
        $query = $this->db->table('tabel_driver')->insert($data);
        return $query;
    }
    public function updateDriver($data, $id)
    {
        $query = $this->db->table('tabel_driver')->update($data, array('driver_id' => $id));
        return $query;
    }
    public function deleteDriver($id)
    {
        $query = $this->db->table('tabel_driver')->delete(array('driver_id' => $id));
        return $query;
    }
}
