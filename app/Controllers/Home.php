<?php

namespace App\Controllers;

use App\Models\Portal\PortalApiModel;
use CodeIgniter\Controller;
use CodeIgniter\Database\Config;

use App\Models\PostModel;
use App\Models\UserContactModel;
use App\Models\PortalModel;


class Home extends Controller
{
    protected $db;
    protected $portal;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->portal = new \App\Models\PortalModel();
    }



    public function index()
    {
        return view('lambretta');
    }


    public function getModel()
    {
        // $brand = $this->request->getVar('brand');
        $brand = 14;
        $data = $this->portal->getModels($brand);

        if ($data) {
            return $this->response->setJSON([
                'status' => 200,
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 401,
                'message' => 'Failed to get the Model Data.'
            ]);
        }
    }


    // public function saveInquiry()
    // {
    //     date_default_timezone_set('Asia/Manila'); 

    //     $data = [
    //         'FirstName'    => $this->request->getVar('firstName'),
    //         'MobileNumber' => $this->request->getVar('mobile'),
    //         'InquiryDate'  => date('Y-m-d H:i:s'), 
    //         'ModelID'      => $this->request->getVar('modelId'),
    //     ];

    //     $builder = $this->portal->table('tbl_inquiries');
    //     $insertSuccess = $builder->insert($data);

    //     if (!$insertSuccess) {
    //         return $this->response->setJSON([
    //             'status'  => 500,
    //             'message' => 'Failed to save inquiry form data. Please try again later.'
    //         ]);
    //     }

    //     return $this->response->setJSON([
    //         'status'  => 200,
    //         'message' => 'Inquiry saved successfully!'
    //     ]);
    // }


    // public function saveInquiry()
    // {
    //     $data = [
    //         'FirstName'     => $this->request->getVar('firstName'),
    //         // 'LastName'      => $this->request->getVar('lastName'),
    //         'MobileNumber'  => $this->request->getVar('mobile'),
    //         'InquiryDate'   => date('Y-m-d H:i:s'),
    //         'ModelID'       => $this->request->getVar('modelId'),

    //         'Category'      => null,
    //         'Brand'         => null,
    //         'Model'         => null,
    //         'DatePurchase'  => null,
    //         'Details'       => null,
    //         'MiddleName'    => null,
    //         'Province'      => null,
    //         'Municipality'  => null,
    //         'Barangay'      => null,
    //         'Street'        => null,
    //         'EmailAddress'  => null,
    //         'UnitPurchaseType' => null,
    //         'CategoryID'    => null,
    //         'BrandID'       => null,
    //         'ProvinceID'    => null,
    //         'MunicipalityID'=> null,
    //         'BarangayID'    => null,
    //         'CreatedBy'     => session('EmployeeNo') ?? null
    //     ];

    //     $builder = $this->portal->table('inquire_form');
    //     $insertSuccess = $builder->insert($data);

    //     if (!$insertSuccess) {
    //         return $this->response->setJSON([
    //             'status'  => 500,
    //             'message' => 'Failed to save inquiry form data. Please try again later.'
    //         ]);
    //     }

    //   $model =   $this->request->getVar('model');

    //     $saveLeadsData = $this->portal->saveLeads(
    //         $data['FirstName'],
    //         // $data['LastName'],
    //         // $data['ProvinceID'],  
    //         // $data['MunicipalityID'], 
    //         // $data['BarangayID'],   
    //         // $data['Street'],       
    //         $data['MobileNumber'],
    //         $model,
    //         null,
    //         $data['InquiryDate']
    //     );

    //     if ($saveLeadsData) {
    //         return $this->response->setJSON([
    //             'status'  => 200,
    //             'message' => 'Inquiry data saved successfully.'
    //         ]);
    //     } else {
    //         return $this->response->setJSON([
    //             'status'  => 500,
    //             'message' => 'Failed to save lead data. Please try again later.'
    //         ]);
    //     }
    // }





    public function saveInquiry()
    {
        $data = [
            'FirstName'      => $this->request->getVar('firstName'),
            'MobileNumber'   => $this->request->getVar('mobile'),
            'InquiryDate'    => date('Y-m-d H:i:s'),
            'ModelID'        => $this->request->getVar('modelId'),

            'Category'       => null,
            'Brand'          => null,
            'Model'          => null,
            'DatePurchase'   => null,
            'Details'        => null,
            'MiddleName'     => null,
            'Province'       => null,
            'Municipality'   => null,
            'Barangay'       => null,
            'Street'         => null,
            'EmailAddress'   => null,
            'UnitPurchaseType' => null,
            'CategoryID'     => null,
            'BrandID'        => null,
            'ProvinceID'     => null,
            'MunicipalityID' => null,
            'BarangayID'     => null,
            'CreatedBy'      => session('EmployeeNo') ?? null
        ];

        // print_r($data);
        // return false;

        $builder = $this->portal->table('inquire_form');
        $insertSuccess = $builder->insert($data);

        if (!$insertSuccess) {
            return $this->response->setJSON([
                'status'  => 500,
                'message' => 'Failed to save inquiry form data. Please try again later.'
            ]);
        }

        $model = $this->request->getVar('model');

        $saveLeadsData = $this->portal->saveLeads(
            $data['FirstName'],
            $data['MobileNumber'],
            $model,
            $data['InquiryDate']
        );

        if ($saveLeadsData) {
            return $this->response->setJSON([
                'status'  => 200,
                'message' => 'Inquiry data saved successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'status'  => 500,
                'message' => 'Failed to save lead data. Please try again later.'
            ]);
        }
    }
}
