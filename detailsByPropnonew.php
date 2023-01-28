<?php
if(isset($_POST['search']))
{
   $pid=$_POST['pid'];
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

$response = curl_exec($curl);
$json = json_decode($response, true);
$err=curl_error($curl);
}
elseif($_REQUEST['propert_id']) {
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

$response = curl_exec($curl);
$json = json_decode($response, true);
$err=curl_error($curl);
}
?>
<?php
$pidd=$json['chargeslipInfo']['gisId'];
//echo $pidd;
$curl = curl_init();

curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://knndigitalpayment.com/AppReceipts.php',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_SSL_VERIFYPEER=> FALSE,
            CURLOPT_SSL_VERIFYHOST=>FALSE,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('GisId' => $pidd),
			CURLOPT_HTTPHEADER => array(
						'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
			),
));

$responsee = curl_exec($curl);

curl_close($curl);
$jsonn = json_decode($responsee, true);
$err=curl_error($curl);
if($jsonn)
{
   // print_r($jsonn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Property Tax Management System : Kanpur Municipal Corporation  : Kanpur Nagar Nigam   </title>
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
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
	<script language="javascript" type="text/javascript">

function PrintContent()

{

var DocumentContainer = document.getElementById('reciept_div');

var WindowObject = window.open("PrintWindow",width=750,height=650,top=50,left=50,toolbars='no',scrollbars='yes',status='no',resizable='yes');

WindowObject.document.writeln(DocumentContainer.innerHTML);

WindowObject.document.close();

WindowObject.focus();

WindowObject.print();

WindowObject.close();

}

</script>

<style>
.grid_12{margin-left:0px;}
    @media only print {
         .bodyy-content {
            visibility: hidden;
         }
         .cssInp {
            visibility: visible;
         }
      }
h3.text-color.bill-heading{margin: 19px;}

@media only screen and (max-width: 767px) {
h3.text-color.bill-heading{margin: 0 !important;}
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
.pay-now{background: green;
    color: #fff;
    border-radius: 5px;
    padding: 7px;
    border: none;
    font-size:17px;
    cursor: pointer;
    width: max-content;}
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
padding: 0px 0px 0px 9px;
}
.payment_history{
    font-size: 15px;
    font-weight: 600;
}
.payment_historyy {padding: 5px !important;}
.text-right a:hover{color:#fff;}
.payment_historyyy td{padding:.75rem !important;}
   </style>
</head>
<body id="page1" class="bodyy-content" oncontextmenu="return false" style="background: #fff8c6;">    
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
                </header>
<!--=========================================content=============================================-->
			  </br>
              <section class="cssInp">
                	<div class="main container">
                	    	<?php
                	    	$year=$json['fyear'];
                	    	$yearr=substr($year,3);
                	    	$carvv=$json['carv'];
                	    	if($carvv=='')
                	    	{
                	    	    $carrvv= "0";
                	    	}
                	    	else
                	    	{
                	    	    $carrvv=$carvv;
                	    	}
                	    	
    $currentdate=date("d-m-Y");
	if($json["status"]==0)
	{
	    
	    $array_data=$json['chargeslipInfo'];
    //print_r($array_data); 
        
        echo '<div class="container">
                
    <div>
                                <table class="table border">
                                    <tr class="text-center">
                                        <td colspan="2" class="text-color" style="
    font-size: 26px;
    font-weight: 600;
">
<div class="d-flex col-md-12 justify-content-center"><img src="images/iku-OXG6_400x400-removebg-preview.png" style="
    width: 9%;
"/><h3 style="
    font-weight: 600;
" class="text-color bill-heading" >Kanpur Samanya Kar(House Tax) Bill Year : 20'.$json['fyear'].'</h3>
<img src="images/ksc.png" style="
    width: 8%;
    height: 6%;
    margin-top: 6px;
    margin-left: 13px;

"/><div>
</td> 
                                    </tr>
                                    <tr>
                                        <td style="width:550px">
                                            <div class="row">
                                                <div class="col text-color">
                                                    Form No:
                                                </div>
                                                <div class="col">
                                                   2 Rule B
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Zone No:
                                                </div>
                                                <div class="col">
                                                    '.$array_data['zone'].'
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Financial Year:
                                                </div>
                                                <div class="col">
                                                    20'.$json['fyear'].'
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Bill No.:
                                                </div>
                                                <div class="col">
                                                  '.$json['billno'].'
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Name :
                                                </div>
                                                <div class="col">
                                                    '. $array_data['CustomerName'].'
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Bill Date:
                                                </div>
                                                <div class="col">'.$currentdate .'</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    House No.:
                                                </div>
                                                <div class="col">
                                                    '.$array_data['houseNo'].'
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">
                                                    Due Date:
                                                </div>
                                                <div class="col">31-03-20'.$yearr.'</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">Address:</div>
                                                <div class="col">
                                                '.$array_data['chuck'].",".$array_data['houseNo'].",".$array_data['area'].'</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">PropertyID</div>
                                                <div class="col">
                                                    '.$array_data['gisId'].'
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">Ward No:</div>
                                                <div class="col">
                                                '.$array_data['ward'].'
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col text-color">Ward Name:</div>
                                                <div class="col">'.$array_data['area'].'</div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table class="table border">
                                    <tr>
                                        <td></td>
                                        <td class="text-color">ARV</td>
                                        <td class="text-color">Percent Rate</td>
                                        <td class="text-color">Current Demand</td>
                                        <td class="text-color">Arrear</td>
                                        <td class="text-color">Interest</td>
                                        <td class="text-color">Tower</td>
                                        <td class="text-color">Other</td>
                                        <td class="text-color">Total</td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">Resedential</td>
                                        <td>'.$json['rarv'].'</td>
                                        <td>15%</td>
                                        <td>'.$json['rtax'].'</td>
                                        <td>'.$array_data['arrearBalance'].'</td>
                                        <td>'. $array_data['interestBalance'].'</td>
                                        <td>'.$json['towertax'].'</td>
                                        <td></td>
                                        <td>'. $array_data['currentBalance'].'</td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">Commercial</td>
                                        <td>'.$carrvv.'</td>
                                        <td>15%</td>
                                        <td>'.$json['ctax'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">Total</td>
                                        <td>'.$json['proposedarv'].'</td>
                                        <td>15%</td>
                                        <td>'.$json['Htax'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>'. $array_data['currentBalance'].'</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="4"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-color">Discount Date</td>
                                        <td>'. $array_data['discountdate'].'</td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-color" colspan="4">Ammount Paid After Discount Date</td>
                                        <td>'. $array_data['discountedBalance'].'</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3" class="text-color">'. $array_data['discountPercentage'] .'% Discount in Rs.</td>
                                        <td></td>
                                    </tr><tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="4" class="text-color">Amount Paid Till Discount Date</td>
                                        <td>'.$array_data['discountedBalance'].'</td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="4"></td>
                                        <td></td>
                                        </tr>
                                </table>
                                         <div class="text-right">
                                         <button class="pay-now bodyy-content" style="float: right;margin-left: 10px;margin-top: -8px;padding: 7px 18px 7px 18px;" onclick="window.print()">Print</button>
                                            <form  method="post"  class="text-right mb-4">
                                    <input type="hidden" name="pid" value="'    .$array_data['gisId'] .'">
                                            <a href="payment.php?propert_id='.$array_data['gisId'].'" class="pay-now" name="search">Pay Now</a>
                                    </form>
                                     </div>
                                </div>
      

                </div>   <div>
                    
                                </div>';
	}
	
   
    else {
    echo "<p style='
    font-size: 18px;
    color: #a10000;
    font-weight: 600;
'>*Please Enter Correct Details</p>";
    }
	
	
	
	?>
	 <?php
        if($jsonn){
        echo "<div class='container bodyy-content'>";
        echo "<div class='table-responsive'>
        <table class='table border table-hover payment_historyyy'>
        <tr style='
    font-size: 21px;
    background: #a10000;
    color: #fff;
'>
            <td colspan='9' class='text-center'>Payment History -Property No. ".$pidd."</td>
        </tr>
                                <tr  style='
    border-bottom: 2px solid #a10000;
    color: #a10000;
    font-weight: 700;
'>
                                    <td> Property ID </td>
                                    <td> Zone</td>
                                    <td> Deposite Date</td>
                                    <td> Deposite Time</td>
                                    <td> Transaction ID </td>
                                    <td> Receipt No. </td>
                                    <td> Deposite Amount</td>
                                    <td> Period </td>
                                    <td> View </td>
                                </tr>
                                <tbody>
                          ";
                          
         foreach($jsonn as $x => $x_value) {
            $ward_detals=$jsonn[$x];
                          echo "
                           <tr>
                                    <td> ".$ward_detals['PropertyId']." </td>
                                    <td> ".$ward_detals['zone']." </td>
                                    <td> ".$ward_detals['Txndate']." </td>
                                    <td> ".$ward_detals['Txntime']." </td>
                                    <td> ".$ward_detals['Txnid']." </td>
                                    <td> </td>
                                    <td> Rs. ".$ward_detals['CollectionAmt']." </td>
                                    <td> 20".$ward_detals['year_knn']." </td>
                                    <td>

                                        <a href='#' class='pay-now' name='search'>View</a>
                                    </td>
                                </tr>
                                ";
            
}
        echo "<tbody>
        </table>
        </div>
        </div>";
    echo "<br><br>";
}
else {
    echo "<p style='
    font-size: 18px;
    color: #a10000;
    font-weight: 600;
'>*No Previous History Available</p>";
}
    ?>
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
</body>
</html>
