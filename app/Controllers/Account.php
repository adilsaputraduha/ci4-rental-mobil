<?php

namespace App\Controllers;

use App\Models\Account_model;

class Account extends BaseController
{
    public function index()
    {
        // $model = new Account_model();
        // $data['type'] = $model->getType()->getresultArray();
        echo view('v_account');
    }
}
