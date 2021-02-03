<?php

namespace App\Controllers;

class Layout extends BaseController
{
    public function index()
    {
        return view('backend/layout/v_beranda');
    }
}
