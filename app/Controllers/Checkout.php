<?php

namespace App\Controllers;

use App\Models\Product_model;
use App\Models\Rental_model;

class Checkout extends BaseController
{
    public function index($id)
    {
        $model = new Product_model();
        $data['rental'] = $model->getProductDetail($id);
        echo view('v_checkout', $data);
    }
}
