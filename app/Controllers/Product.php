<?php

namespace App\Controllers;

use App\Models\Product_model;
use App\Models\Rental_model;

class Product extends BaseController
{
    public function index()
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct();
        echo view('v_product', $data);
    }

    public function detail($id)
    {
        $model = new Product_model();
        $data['productdetail'] = $model->getProductDetail($id);
        echo view('v_detail', $data);
    }

    public function checkout($id)
    {
        $model = new Product_model();
        $data['productdetail'] = $model->getProductDetail($id);
        echo view('v_checkout', $data);
    }

    public function save($id, $id2)
    {
        $model = new Rental_model();
        $data = array(
            'sewa_no_nota' => $this->request->getPost('name'),
            'sewa_tgl' => $this->request->getPost('tgl1'),
            'sewa_tglkembali' => $this->request->getPost('tgl2'),
            'sewa_id_penyewa' => $id2,
            'sewa_id_mobil' => $id,
            'sewa_lama' => $this->request->getPost('lama'),
            'sewa_total' => $this->request->getPost('total')
        );
        $model->saveRental($data);
        return redirect()->to('/product');
    }
}
