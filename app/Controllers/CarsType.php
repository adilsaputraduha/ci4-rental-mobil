<?php

namespace App\Controllers;

use App\Models\CarsType_model;
use Mpdf\Mpdf as MpdfMpdf;

class CarsType extends BaseController
{
    public function index()
    {
        $model = new CarsType_model();
        $data['type'] = $model->getType()->getresultArray();
        echo view('backend/v_carstype', $data);
    }
    public function save()
    {
        $model = new CarsType_model();
        // Validasi
        if (!$this->validate([
            'name' => [
                'rules' => 'is_unique[tabel_jenis.jenis_nama]',
                'errors' => [
                    'is_unique' => 'Car type already exist.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }
        $data = array(
            'jenis_nama' => $this->request->getPost('name')
        );
        $model->saveType($data);
        session()->setFlashdata('pesan', 'Data successfully added.');
        return redirect()->to('/carstype');
    }

    public function update()
    {
        $model = new CarsType_model();
        $id = $this->request->getPost('id');
        if (!$this->validate([
            'name' => [
                'rules' => 'is_unique[tabel_jenis.jenis_nama]',
                'errors' => [
                    'is_unique' => 'Car type already exist.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }
        $data = array(
            'jenis_nama' => $this->request->getPost('name')
        );
        $model->updateType($data, $id);
        session()->setFlashdata('pesan', 'Data successfully updated.');
        return redirect()->to('/carstype');
    }

    public function delete()
    {
        $model = new CarsType_model();
        $id = $this->request->getPost('id');
        $model->deleteType($id);
        session()->setFlashdata('pesan', 'Data successfully deleted.');
        return redirect()->to('/carstype');
    }

    public function exportPdf()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tabel_jenis');
        $query = $builder->get();
        $table = '';
        $no = 1;
        foreach ($query->getResult('array') as $row) {
            $table .= '<tr>
                                <td>' . $no++ . '</td>
                                <td>' . $row['jenis_nama'] . '</td>
                                <td>' . $row['jenis_create'] . '</td>                           
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
                                <h4>Data Jenis</h4>
                                    <table border="1" width="100%" id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse;">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
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
        $mpdf->Output('ReportDataJenis.pdf', 'I');
        exit;
    }
}
