<?php
// Include configuration file
require_once 'config.php';
class PaypalApi{
    public $paypalEnv      = PAYPAL_SANDBOX?'sandbox': 'production';
    public $paypalURL      = PAYPAL_SANDBOX?'https://api.sandbox.paypal.com/v1/': 'https://api.paypal.com/v1/';
    public $paypalClientID = PAYPAL_CLIENT_ID;
    private $paypalSecret  = PAYPAL_SECRET_ID;

    public function validate($paymentID, $paymentToken, $payerID, $productID){
        //Validate function
        //1. Get the access Token Using Paypal OAuth2 API.
        //2. Validate the Payment and get Transaction data using Paypal payments REST API

        $ch = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->paypalURL.'oauth2/token');
        curl_setopt($c, CURLOPT_HEADER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_USERPWD, $this->paypalClientID.":".$this->paypalSecret);
        curl_setopt($c, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $response = curl_exec($ch);
        curl_close($ch);

        if (empty($response)){
            return false;
        }else {
            $jsonData = json_decode($response);
            $curl    = curl_init($this->paypalURL.'payments/payment/'.$paymentID);
            curl_setopt($curl, CURLOPT_POST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer' . $jsonData->access_token,
                'Accept: application/json',
                'Content-Type: application/xml'
            ));
            $response  = curl_exec($curl);
            curl_close($curl);

            //Transaction Data
            $result  =  json_decode($response);
            return $result;
        }
    }
}




?>