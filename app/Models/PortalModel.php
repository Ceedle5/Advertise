<?php

namespace App\Models;

use CodeIgniter\Model;

class portalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_inquiries';
    protected $primaryKey       = 'id';
    protected $db;
    protected $str;


    protected $allowedFields = ['FirstName', 'LastName', 'MobileNumber', 'InquiryDate', 'ModelID'];
    protected $useTimestamps = false;



    private function getHeader()
    {
        $headers = array();
        array_push($headers, "Content-Type: " . "application/json");
        array_push($headers, "Client-ID: " . $this->getClientID());
        array_push($headers, "Secret-Key: " . $this->getSecretKey());

        return $headers;
    }

    private function getURL()
    {
        return 'https://mis.ropali.com.ph/api/portal/v1/';
    }

    /**
     * Get Secret Key
     * */
    private function getSecretKey()
    {
        return '1Blrq8l3Y0nnXqNKkp137Lwc2PBRugl6w4jAl4FC6iw';
    }

    /**
     * Get Secret Key
     * */
    private function getAppKey()
    {
        return '9dcc0f75-0305-48bf-a2e2-97f9f2c21545';
    }

    private function getClientID()
    {
        return '4cf049d4-177e-4801-81ea-da3cdabc6030';
    }

    private function getPassKey()
    {
        return 'TmPqUzBVyJr4DM2aJdSLuPYR';
    }

    private function sendCurl($url, $headers, $json, $method)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 3000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }



    public function getModels($brand)
    {
        $payload = json_encode(['appKey' => $this->getAppKey(), 'action' => 'GET_MODEL_BY_BRAND', 'data' => ['brandID' => $brand]]);

        $response = json_decode($this->sendCurl($this->getURL(), $this->getHeader(), $payload, 'POST'));

        if ($response->statusCode == '2000') {
            return $response->data;
        } else {
            return $response;
        }
    }

    // public function saveLeads($firstName,$mobileNo,$model,$inquiryDate){
    // 	$payload = json_encode(['appKey' => $this->getAppKey(),
    // 							'action' => 'INSERT_LEADS',
    // 							'data'	 => [
    // 								'firstName' => $firstName,
    // 								'lastName'	=> null,
    // 								'province'	=> null,
    // 								'city'		=> null,
    // 								'barangay'	=> null,
    // 								'address'	=> null,
    // 								'mobileNo'	=> $mobileNo,
    // 								'model'		=> $model,
    // 								'downpayment' => null,
    // 								'inquiryDate' => $inquiryDate
    // 							]
    // 	]);

    // 	$response = json_decode($this->sendCurl($this->getURL(),$this->getHeader(),$payload,'POST'));

    // 	if($response->statusCode == '2000'){
    // 		return $response->data;
    // 	}else{
    // 		return $response;
    // 	}
    // }

    public function saveLeads($firstName, $mobileNo, $model, $inquiryDate)
    {
        $payload = json_encode([
            'appKey' => $this->getAppKey(),
            'action' => 'INSERT_LEADS',
            'data'   => [
                'firstName'   => $firstName,
                'lastName'    => null,
                'province'    => null,
                'city'        => null,
                'barangay'    => null,
                'address'     => null,
                'mobileNo'    => $mobileNo,
                'model'       => $model,
                'downpayment' => null,
                'inquiryDate' => $inquiryDate
            ]
        ]);
    
        $response = json_decode($this->sendCurl($this->getURL(), $this->getHeader(), $payload, 'POST'));
    
        log_message('debug', 'saveLeads Payload: ' . $payload);
        log_message('debug', 'saveLeads Response: ' . json_encode($response));
    
        if (isset($response->statusCode) && $response->statusCode == '2000') {
            return true;
        } else {
            log_message('error', 'saveLeads failed: ' . json_encode($response));
            return false;
        }
    }
    
}
