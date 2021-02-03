<?php

namespace App\Controllers;

use App\Models\CarsDetail_model;
use App\Models\CarsBrand_model;
use App\Models\CarsType_model;
use App\Models\Product_model;
use Mpdf\Mpdf as MpdfMpdf;

class CarsDetail extends BaseController
{
    public function index()
    {
        $model = new CarsDetail_model();
        $model1 = new CarsBrand_model();
        $model2 = new CarsType_model();
        $data['detail'] = $model->getDetail();
        $data['merk'] = $model1->getMerk()->getresultArray();
        $data['type'] = $model2->getType()->getresultArray();
        echo view('backend/v_carsdetail', $data);
    }
    public function save()
    {
        $model = new CarsDetail_model();
        $data = array(
            'mobil_no_polisi' => $this->request->getPost('platnumber'),
            'mobil_id_merk' => $this->request->getPost('brand'),
            'mobil_id_jenis' => $this->request->getPost('type'),
            'mobil_tahun' => $this->request->getPost('years'),
            'mobil_harga_sewa' => $this->request->getPost('price'),
            'mobil_kapasitas' => $this->request->getPost('capacity')
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

        $model->saveDetail($data);
        return redirect()->to('/carsdetail');
    }

    public function edit()
    {
        $model = new CarsDetail_model();
        $id = $this->request->getPost('id');
        $data = array(
            'mobil_no_polisi' => $this->request->getPost('platnumber'),
            'mobil_id_merk' => $this->request->getPost('brand'),
            'mobil_id_jenis' => $this->request->getPost('type'),
            'mobil_tahun' => $this->request->getPost('years'),
            'mobil_harga_sewa' => $this->request->getPost('price'),
            'mobil_kapasitas' => $this->request->getPost('capacity')
        );
        $model->updateDetail($data, $id);
        return redirect()->to('/carsdetail');
    }

    public function delete()
    {
        $model = new CarsDetail_model();
        $id = $this->request->getPost('id');
        $model->deleteDetail($id);
        return redirect()->to('/carsdetail');
    }

    public function exportPdf()
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct();
        $table = '';
        $no = 1;
        foreach ($data['product'] as $row) {
            $table .= '<tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row['mobil_no_polisi'] . '</td>
                                <td>' . $row['merk_nama'] . '</td>
                                <td>' . $row['jenis_nama'] . '</td>  
                                <td>' . $row['mobil_tahun'] . '</td>  
                                <td>' . $row['mobil_harga_sewa'] . '</td>  
                                <td>' . $row['mobil_kapasitas'] . '</td>                             
                            </tr>';
        }
        $mpdf = new MpdfMpdf(['debug' => FALSE, 'mode' => 'utf-8', 'orientation' => 'L']);
        $mpdf->WriteHTML('
                            <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title></title>
                                </head>
                                <body>
                                <p><b>SANAK RENTAL</b></p>
                                <p>Komp. Parupuk Raya Blok H. 6</p>
                                <hr>
                                <h4>Data Mobil</h4>
                                    <table border="1" width="100%" id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse;">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Plat Number</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Tahun</th>
                                            <th>Harga</th>
                                            <th>Kapasitas</th>                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ' . $table . '                       
                                        </tbody>
                                    </table>
                                </body>
                                </html>
                    ');
        $mpdf->Output('ReportDataMobil.pdf', 'I');
        exit;
    }
}
