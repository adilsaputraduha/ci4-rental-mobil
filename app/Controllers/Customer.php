<?php

namespace App\Controllers;

use App\Models\Customer_model;

class Customer extends BaseController
{
    public function index()
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer()->getresultArray();
        echo view('backend/v_customer', $data);
    }
    public function save()
    {
        $model = new Customer_model();
        $data = array(
            'penyewa_nama' => $this->request->getPost('name'),
            'penyewa_email' => $this->request->getPost('email'),
            'penyewa_password' => $this->request->getPost('password'),
            'penyewa_alamat' => $this->request->getPost('alamat'),
            'penyewa_no_telp' => $this->request->getPost('nohp')
        );
        $model->saveCustomer($data);
        return redirect()->to('/product');
    }

    public function update()
    {
        $model = new Customer_model();
        $id = $this->request->getPost('id');
        $data = array(
            'jenis_nama' => $this->request->getPost('name')
        );
        $model->updateType($data, $id);
        return redirect()->to('/carstype');
    }

    public function delete()
    {
        $model = new Customer_model();
        $id = $this->request->getPost('id');
        $model->deleteType($id);
        return redirect()->to('/carstype');
    }
}
