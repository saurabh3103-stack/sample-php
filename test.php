<?php
$client = new http\Client;
$request = new http\Client\Request;
$request->setRequestUrl('https://knndigitalpayment.com/AppSearchpid.php');
$request->setRequestMethod('POST');
$body = new http\Message\Body;
$body->addForm(array(
  'hno' => '1',
  'zone' => '6',
  'ward' => '16',
  'name' => 'Vi',
  'chk' => 'Select'
), array(

));
$request->setBody($body);
$request->setOptions(array());
$request->setHeaders(array(
  'X-TP-ApiKey' => 'c77f5eb4d7d525855522d7ac65c5487d'
));
$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();

?>