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
    $mobile = $_SESSION['mobile'];
    $price = $_SESSION['price'];
    $receipt=$_SESSION['receipt'];
    $sql = "INSERT INTO `transaction` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`,`receipt`,`date`,`mobile`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'Success', '$email', '$price','$receipt','$datee','$mobile')";
    if(mysqli_query($conn, $sql)){
        header("location:payment_receipt.php?receipt=$receipt");
    }
    // $html="Payment ID: {$payment_id}
    // House_ID{$house_id}";
    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
