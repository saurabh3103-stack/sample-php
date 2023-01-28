<?php
require('gateway-config.php');
require('configdb.php');
session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
            $datee=date("d-m-Y");
            $payment_id=$_POST['razorpay_payment_id'];
            $house_id= $_SESSION['house_id'];
            $razorpay_order_id = $_SESSION['razorpay_order_id'];
            $razorpay_payment_id = $_POST['razorpay_payment_id'];
            $email = $_SESSION['email'];
            $id=$_SESSION['house_id'];
            $mobile = $_SESSION['mobile'];
            $price = $_SESSION['price'];
            $receipt=$_SESSION['receipt'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://knndigitalpayment.com/webUpdateInfo.php',
           CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYPEER=> FALSE,
            CURLOPT_SSL_VERIFYHOST=>FALSE,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'GisId' => $id,'plTransactionId' => $payment_id,
                'paymentMode' => '1','transactionTime' => $datee,
                'transactionAmount' => $price),
            CURLOPT_HTTPHEADER => array(
                        'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
            ),
));
$response = curl_exec($curl);
$json = json_decode($response, true);
    if($json["status"]==0)
    {
         $_SESSION['razorpay_order_id']=$razorpay_order_id;
         $_SESSION['razorpay_payment_id']=$razorpay_payment_id;
         header("location:payment_receipt.php?property_id=$id&rec_id=$razorpay_order_id&trans_id=$razorpay_payment_id&date=$datee&amt=$price");
    }
    else
    {
      header("location: payment_failed.php");
     
    }
}
else
{
      header("location: payment_failed.php");
}

echo $html;
