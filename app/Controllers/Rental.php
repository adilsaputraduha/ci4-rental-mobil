<?php

namespace App\Controllers;

use App\Models\Rental_model;
use App\Models\Product_model;
use App\Models\Customer_model;

class Rental extends BaseController
{
    public function index()
    {
        $model = new Rental_model();
        $data['sewa'] = $model->getRental();
        echo view('backend/v_rental', $data);
    }
    public function save()
    {
        $model = new Rental_model();
        $data = array(
            'sewa_tgl' => $this->request->getPost('tgl1'),
            'sewa_id_penyewa' => $this->request->getPost('idpenyewa'),
            'sewa_id_mobil' => $this->request->getPost('idmobil'),
            'sewa_lama' => $this->request->getPost('lama'),
            'sewa_total' => $this->request->getPost('total')
        );
        $model->saveRental($data);
        return redirect()->to('/rental');
    }

    public function add()
    {
        $model = new Product_model();
        $model1 = new Customer_model();
        $data['productdetail'] = $model->getProduct();
        $data['customer'] = $model1->getCustomer()->getresultArray();
        echo view('backend/v_addrental', $data);
    }
    // public function update()
    // {
    //     $model = new Rental_model();
    //     $id = $this->request->getPost('id');
    //     $data = array(
    //         'jenis_nama' => $this->request->getPost('name')
    //     );
    //     $model->updateRental($data, $id);
    //     return redirect()->to('/rental');
    // }

    // public function delete()
    // {
    //     $model = new Rental_model();
    //     $id = $this->request->getPost('id');
    //     $model->deleteRental($id);
    //     return redirect()->to('/rental');
    // }
}
