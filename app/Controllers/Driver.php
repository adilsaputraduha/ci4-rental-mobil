<?php

namespace App\Controllers;

use App\Models\Driver_model;

class Driver extends BaseController
{
    public function index()
    {
        $model = new Driver_model();
        $data['driver'] = $model->getDriver()->getresultArray();
        echo view('backend/v_driver', $data);
    }
    public function save()
    {
        $model = new Driver_model();
        $data = array(
            'driver_nama' => $this->request->getPost('nama'),
            'driver_jenis_kelamin' => $this->request->getPost('jenkel'),
            'driver_alamat' => $this->request->getPost('alamat'),
            'driver_nohp' => $this->request->getPost('nohp')
        );
        // if (!$this->validate([
        //     'iddokter' => [
        //         'rules' => 'required|is_unique[table_dokter.dokter_id]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'is_unique' => '{field} Sudah ada'
        //         ]
        //     ]
        // ])) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // } else {
        //     print_r($this->request->getVar());
        // }
        $model->saveDriver($data);
        return redirect()->to('/driver');
    }

    public function update()
    {
        $model = new Driver_model();
        $id = $this->request->getPost('id');
        $data = array(
            'driver_nama' => $this->request->getPost('nama'),
            'driver_jenis_kelamin' => $this->request->getPost('jenkel'),
            'driver_alamat' => $this->request->getPost('alamat'),
            'driver_nohp' => $this->request->getPost('nohp')
        );
        $model->updateDriver($data, $id);
        return redirect()->to('/driver');
    }

    public function delete()
    {
        $model = new Driver_model();
        $id = $this->request->getPost('id');
        $model->deleteDriver($id);
        return redirect()->to('/driver');
    }
}
