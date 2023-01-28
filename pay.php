<?php

require('gateway-config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $_SESSION['name']=$name;
    $email=$_POST['email'];
    $_SESSION['email']=$email;
    $mobile=$_POST['mobile'];
     $_SESSION['mobile']=$mobile;
    $address=$_POST['address'];
    $_SESSION['address']=$address;
    $amt=$_POST['amt'];
     $_SESSION['price']=$amt;
    $price=substr($amt,3);
    $bill_no=$_POST['bill_no'];
    $_SESSION['bill_no']=$bill_no;
    $house_id=$_POST['house_id'];
    $_SESSION['house_id']=$house_id;
    $receipt="KMC".(rand(100,1000));
    $_SESSION['receipt']=$receipt;
}

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $receipt,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Kanpur Nagar Nigam",
    "description"       => "House Tax",
    "image"             => "https://deificdigital.com/kmcc/images/iku-OXG6_400x400-removebg-preview.png",
    "prefill"           => [
    "name"              => '',
    "email"             => $email,
    "contact"           => $mobile,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
