<?php
session_start();
if($_REQUEST['propert_id'])
{
        $pid=$_REQUEST['propert_id'];
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
            CURLOPT_POSTFIELDS => array('GisId' => $pid),
            CURLOPT_HTTPHEADER => array(
                        'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
            ),
));

$responsee = curl_exec($curl);
$jsonn = json_decode($responsee, true);
$err=curl_error($curl);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Property Tax Management System : Kanpur Nagar Nigam   </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" type="text/css" media="screen">
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/superfish.js" type="text/javascript"></script>
    <script src="js/jquery.hoverIntent.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/tabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.ui.core.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
	<script language="javascript" src="js/ajaxfunc2.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85 )) {
            return false;
        }
};
</script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>

<style>
.grid_12{margin-left:0px;}
.pay-now{background: green;
    color: #fff;
    border-radius: 5px;
    padding: 7px;
    border: none;
    cursor: pointer;
    width: max-content;}
    h3, h4, h6, h5 {
    font-weight: normal;
    font-family: Arial, Helvetica, sans-serif;
    color: #000;
    display: block !important;
}
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4); 
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
h6 {
    font-size: 16px;
    }
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
.border{
 border: 2px solid #a10000 !important;   
}
.text-color{
    color: #a10000;
}
.table tr td {
  border: 1px solid #a10000;
}
</style>
</head>
<body id="page1" oncontextmenu="return false" style="
    background: #fff8c6;
">
<!--=========================================header=============================================-->
                <div class="hover_bkgr_fricc">
    <span class="helper"></span>
</div>
<header id="header">
                    <div class="main" style="text-align:center;">
<img src="images/Header.JPG" class="img-fluid" />
                        <div class="clear"></div>
                    </div>
                   <div class="tail-1 row"style="margin: 0px;">
                        <div class="col-md-1" style="background: #343a40;">
                            <p style="color: #fff;background: #343a40;font-size: 21px; margin: 0px;">Notice</p>
                        </div>
                        <div class="main col-md-11 p-0">
                            <ul class="menu">
                                <marquee style="color: #fff;font-size: 21px;" class="mt-1">Pay Your Property Tax Before 31-March-2023</marquee>
                            </ul>        
                        </div>
                    </div>
                </header><br />

<!--=========================================content=============================================-->
			  <section id="content">
                	<div class="main">
                            <?php
    if($jsonn)
    {
        
        $array_data=$jsonn['chargeslipInfo'];
    //print_r($array_data);
    echo "<div class='container d-none'>";
        echo "<div class='table-responsive'>
        <table class='table table-hover'>
                                <thead>
                                <tr>
                                 <th> Name </th>
                                    <th> PropertyId </th>
                                    <th> Circle Name </th>
                                    <th> Zone </th>
                                    <th> Ward </th>
                                    <th> Chak Number </th>
                                    <th> Area </th>
                                    <th> House Number </th>
                                    <th> Interest Balance </th>
                                    <th> Arrear Balance </th>
                                    <th> Current Tax </th>
                                    <th> Advace Payment </th>
                                    <th> Current Balance </th>
                                    <th> Discount Percentage </th>
                                    <th> Discount Balance </th>
                                </tr>
                                </thead>
                                <tbody>
                          ";
   echo "
                           <tr>
                                    <td> ".$array_data['CustomerName']."</td>
                                     <td> ".$array_data['gisId']." </td>
                                    <td> ".$array_data['CircleName']." </td>
                                    <td> ".$array_data['zone']." </td>
                                    <td> ".$array_data['ward']." </td>
                                    <td> ".$array_data['chuck']." </td>
                                    <td> ".$array_data['area']." </td>
                                    <td> ".$array_data['houseNo']." </td>
                                    <td> ".$array_data['interestBalance']." </td>
                                    <td> ".$array_data['arrearBalance']." </td>
                                    <td> ".$array_data['currentTax']." </td>
                                    <td> ".$array_data['advacePayment']." </td>
                                    <td> ".$array_data['currentBalance']." </td>
                                    <td> ".$array_data['discountPercentage']." </td>
                                    <td> ".$array_data['discountedBalance']." </td>
                                </tr>";
echo "<tbody>
        </table>
        </div>
        </div>";
    }
    
    
    
    
    ?>
                        <div class="container">
                            <h3 style="
    background: #a10000;
    color: #fff;
    border-radius: 6px;
    padding: 4px 30px 4px 30px;
" class="text-center">
                                Confirmation of Payment
                            </h3>
                            <p style="
    margin: 8px;
    font-size: 20px;
" class="text-center">GIS Property No/AGR No.: - <?= $array_data['gisId'];?></p>
                         <form method="post" action="pay.php">
                                <h6>Personal Information</h6>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                       <label> Bill No.*</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled="disabled"  value="<?= $jsonn['billno']; ?>"  style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                          <input type="hidden" id="bill_no" name="bill_no" required value="<?= $jsonn['billno']; ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                       <label> Name*</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled="disabled"  value="<?= $array_data['CustomerName'] ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                        <input type="hidden" id="name" name="name"   value="<?= $array_data['CustomerName'] ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                    </div>
                                </div>
                                
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Email*</label>
                                    </div>
                                    <div class="col">
                                        <input type="email" id="email" name="email"  style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Mobile*</label>
                                    </div>
                                    <div class="col">
                                        <input type="text"  id="mobile" name="mobile" required style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Address*</label>
                                    </div>
                                    <div class="col">
                                        <textarea row="4" disabled="disabled" placeholder="<?= $array_data['chuck'].",".$array_data['houseNo'].",".$array_data['area'] ?>"  style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;"></textarea>
                                        <input type="hidden"  id="address" name="address"  style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px;">  
                                    </div>
                                </div>
                                     <h6>Payment</h6>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Current Tax</label>
                                    </div>
                                    <div class="col">
                                       <?= $array_data['currentTax']; ?>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Arrear</label>
                                    </div>
                                    <div class="col">
                                        <?= $array_data['arrearBalance']; ?>
                                    </div>
                                </div>  
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label>Interest    </label>
                                    </div>
                                    <div class="col">
                                        <?= $array_data['interestBalance']; ?>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-3">
                                        <label><?= $array_data['discountPercentage']; ?>% Discount</label>
                                    </div>
                                    <div class="col">
                                        
                                    </div>
                                </div>
                                <div class="row mt-1" style="color:red;">
                                    <div class="col-md-3">
                                        <label>Amount to be paid</label>   
                                    </div>
                                    <div class="col">
                                        <input type="text"  disabled="disabled" value="<?= $array_data['discountedBalance'] ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px; color:red;">
                                         <input type="hidden" id="amt" name="amt"  value="<?= $array_data['discountedBalance'] ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px; color:red;">
                                           <input type="hidden" id="house_id" name="house_id"  value="<?= $array_data['gisId'] ?>" style="width: 300px;font-family: Verdana;font-size: 11px;padding:4px; color:red;">
                                    </div>
                                </div>
                                <p style="margin: 0px;font-size: 20px; color:#000">Time Left : <span id="timer" style="color:red;"></span></p>
                                <!--<buttton class='pay-now'>Pay Now</buttton>-->
                                <input type="submit"  name="submit"   value="Pay Now" class='pay-now'>
                                <input type="reset"  value="Cancel" class='pay-now' style="background: red;">
                            </form>
                            <div class="mt-3 text-danger">
                                <label>Note: In case your payment is not updated immediately, please wait for 48 - 72 hours before making any other payment. Issuer bank will authorize the transaction in the given period and your payment will be updated automatically.</label>
                                <label>* denotes required field</label>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
<!--==============================footer================================-->
    <div>
        <div class="main container">
            <div class="p-4">
                <div class="wrapper">
                    <article class="">
                    <div class="p-3">
                   
                    </div>
                        <center><span class="d-block" style="
    color: #a10000;
"><strong>Disclaimer -</strong> Content on this website is published and managed by Kanpur Nagar Nigam.
Contents Provided by Nagar Nigam, Kanpur<br />
For any query regarding this application Please Contact Kanpur Nagar Nigam, email-kanpur_nagar.nigam@yahoo.co.in</span></center>

                        <!--{%FOOTER_LINK} -->
                    </article>
                </div>
            </div>
        </div>
    </div>
    <footer style="background: #a10000;color: #fff;padding: 5px;" class="text-center"">
        Copyright© Kanpur Nagar Nigam Kanpur All rights reserved.
    </footer>
<script>
document.getElementById('timer').innerHTML =
  05 + ":" + 01;
startTimer();


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
</body>
</html>
