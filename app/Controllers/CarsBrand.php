<?php

namespace App\Controllers;

use App\Models\CarsBrand_model;
use Mpdf\Mpdf as MpdfMpdf;

class CarsBrand extends BaseController
{
    public function index()
    {
        $model = new CarsBrand_model();
        $data['merk'] = $model->getMerk()->getresultArray();
        echo view('backend/v_carsbrand', $data);
    }
    public function save()
    {
        $model = new CarsBrand_model();
        $data = array(
            'merk_nama' => $this->request->getPost('name')
        );

        $model->saveMerk($data);
        return redirect()->to('/carsbrand');
    }

    public function edit()
    {
        $model = new CarsBrand_model();
        $id = $this->request->getPost('id');
        $data = array(
            'merk_nama' => $this->request->getPost('name')
        );
        $model->updateMerk($data, $id);
        return redirect()->to('/carsbrand');
    }

    public function delete()
    {
        $model = new CarsBrand_model();
        $id = $this->request->getPost('id');
        $model->deleteMerk($id);
        return redirect()->to('/carsbrand');
    }

    public function exportPdf()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tabel_merk');
        $query = $builder->get();
        $table = '';
        $no = 1;
        foreach ($query->getResult('array') as $row) {
            $table .= '<tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row['merk_nama'] . '</td>
                                <td>' . $row['merk_create'] . '</td>                           
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
                                <h4>Data Merk</h4>
                                    <table border="1" width="100%" id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse;">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Merk</th>
                                            <th>Create</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ' . $table . '                       
                                        </tbody>
                                    </table>
                                </body>
                                </html>
                    ');
        $mpdf->Output('ReportDataMerk.pdf', 'I');
        exit;
    }
}
