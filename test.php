<?php
echo "6016MDP03903001";
$curl = curl_init();
curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://knndigitalpayment.com/AppBillinfo.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYPEER=> FALSE,
            CURLOPT_SSL_VERIFYHOST=>FALSE,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('GisId' => "6016MDP03903001"),
            CURLOPT_HTTPHEADER => array(
                        'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
            ),
));

$response = curl_exec($curl);
$json = json_decode($response, true);
$err=curl_error($curl);
print_r($response);
print_r($err);
?>