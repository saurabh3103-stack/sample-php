<?php
function convertNumberToWordsForIndia($number){
    //A function to convert numbers into Indian readable words with Cores, Lakhs and Thousands.
    $words = array(
    '0'=> '' ,'1'=> 'one' ,'2'=> 'two' ,'3' => 'three','4' => 'four','5' => 'five',
    '6' => 'six','7' => 'seven','8' => 'eight','9' => 'nine','10' => 'ten',
    '11' => 'eleven','12' => 'twelve','13' => 'thirteen','14' => 'fouteen','15' => 'fifteen',
    '16' => 'sixteen','17' => 'seventeen','18' => 'eighteen','19' => 'nineteen','20' => 'twenty',
    '30' => 'thirty','40' => 'fourty','50' => 'fifty','60' => 'sixty','70' => 'seventy',
    '80' => 'eighty','90' => 'ninty');
    
    //First find the length of the number
    $number_length = strlen($number);
    //Initialize an empty array
    $number_array = array(0,0,0,0,0,0,0,0,0);        
    $received_number_array = array();
    
    //Store all received numbers into an array
    for($i=0;$i<$number_length;$i++){    
  		$received_number_array[$i] = substr($number,$i,1);    
  	}

    //Populate the empty array with the numbers received - most critical operation
    for($i=9-$number_length,$j=0;$i<9;$i++,$j++){ 
        $number_array[$i] = $received_number_array[$j]; 
    }

    $number_to_words_string = "";
    //Finding out whether it is teen ? and then multiply by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
    for($i=0,$j=1;$i<9;$i++,$j++){
        //"01,23,45,6,78"
        //"00,10,06,7,42"
        //"00,01,90,0,00"
        if($i==0 || $i==2 || $i==4 || $i==7){
            if($number_array[$j]==0 || $number_array[$i] == "1"){
                $number_array[$j] = intval($number_array[$i])*10+$number_array[$j];
                $number_array[$i] = 0;
            }
               
        }
    }

    $value = "";
    for($i=0;$i<9;$i++){
        if($i==0 || $i==2 || $i==4 || $i==7){    
            $value = $number_array[$i]*10; 
        }
        else{ 
            $value = $number_array[$i];    
        }            
        if($value!=0)         {    $number_to_words_string.= $words["$value"]." "; }
        if($i==1 && $value!=0){    $number_to_words_string.= "Crores "; }
        if($i==3 && $value!=0){    $number_to_words_string.= "Lakhs ";    }
        if($i==5 && $value!=0){    $number_to_words_string.= "Thousand "; }
        if($i==6 && $value!=0){    $number_to_words_string.= "Hundred &amp; "; }            

    }
    if($number_length>9){ $number_to_words_string = "Sorry This does not support more than 99 Crores"; }
    return ucwords(strtolower($number_to_words_string."Rupees ")." Only/-");
}
//require('configdb.php');
$id=$_REQUEST['property_id'];
$rec_id=$_REQUEST['rec_id'];
$trans_id=$_REQUEST['trans_id'];
$date=$_REQUEST['date'];
$amt=$_REQUEST['amt'];
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
            CURLOPT_POSTFIELDS => array('GisId' => $id),
            CURLOPT_HTTPHEADER => array(
                        'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
            ),
));

$response = curl_exec($curl);
$json = json_decode($response, true);
$err=curl_error($curl);
//print_r($json);
//echo $json['chargeslipInfo']['CustomerName'];
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kanpur Municipal Corporation  : Kanpur Nagar Nigam   </title>
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
Function disableclick(event)
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

	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
<style>
.grid_12{margin-left:0px;}
</style>
</head>
<body id="page1" oncontextmenu="return false" style="
    background: #fff8c6;
">
<!--=========================================header=============================================-->
                <div class="hover_bkgr_fricc">
    <span class="helper"></span>
</div>
<style>
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
.pay-now{background: #a10000;
    color: #fff;
    border-radius: 5px;
   padding: 3px 18px 3px 18px;
    font-size: 20px;
    border: none;
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
  padding: 0px 0px 0px 6px;
}
h3.text-color.bill-heading{margin: 19px;}

@media only screen(max-width: 767px) {
h3.text-color.bill-heading{margin: 0 !important;}
}
</style>
		  <section id="content">
                	<div class="main">
                	   
                    	   <div class="container">
                        	<div>
                        	    <table class="table border">
                        	       <tr class="text-center">
                        	                              <td colspan="6" class="text-color" style="
    font-size: 26px;
    font-weight: 600;
">
<div class="d-flex col-md-12 justify-content-center"><img src="images/iku-OXG6_400x400-removebg-preview.png" style="
    width: 9%;
"/><h3 style="
    font-weight: 600;
" class="text-color bill-heading">Kanpur Samanya Kar(House Tax) Bill Year : 20<?= $json['fyear']; ?></h3>
<img src="images/ksc.png" style="
    width: 8%;
    height: 6%;
    margin-top: 6px;
    margin-left: 13px;

"/><div>
                        	       </tr>
                                   <tr class="text-center" style="background: #a10000;color: #fff;">
                                       <td colspan="6" style="
">Online Payment Receipt

</td> 
                                   </tr>
                     
                        	       <tr>
                                    <td><span class="text-color">Form No-</span> 2 Rule B</td>  
                                    <td><span class="text-color">Transaction ID:</span>  <?= $trans_id; ?></td>  
                                    <td><span class="text-color">Property ID :</span>  <?= $id; ?></td>  
                                    <td class="text-color">Receipt ID</td>  
                                    <td colspan="2"><?= $rec_id; ?></td>   
                                   </tr>
                                    <tr>
                                    <td class="text-color">Bill No. </td>  
                                    <td><?= $json['billno']; ?></td>  
                                    <td></td>  
                                    <td></td>  
                                    <td class="text-color">Date</td>
                                    <td><?= $date; ?></td>   
                                   </tr>
                                   <tr>
                                    <td class="text-color">Year</td>  
                                    <td>20<?= $json['fyear']; ?></td>  
                                   </tr>
                                   <tr>
                                    <td class="text-color">Chak No</td>  
                                    <td><?= $json['chargeslipInfo']['chuck']; ?></td>  
                                    <td class="text-color">Ward No.</td>  
                                    <td><?= $json['chargeslipInfo']['ward']; ?> </td>  
                                    <td class="text-color">Zone No.</td>
                                    <td><?= $json['chargeslipInfo']['zone']; ?> </td>   
                                   </tr>
                                   <tr>
                                    <td rowspan="10" colspan="4"><span class="text-color">Name & Address:</span>
                                        <?= $json['chargeslipInfo']['CustomerName']; ?>
                                        <br><?= $json['chargeslipInfo']['chuck']; ?>,<?= $json['chargeslipInfo']['houseNo']; ?>,<?= $json['chargeslipInfo']['area']; ?>
                                    </td>  
                                    <td class="text-color">Details of Dues</td>
                                    <td class="text-color">Amount in Rs</td>   
                                   </tr>
                                   <tr>
                                    <td class="text-color">Arrear</td>
                                    <td><?= $json['chargeslipInfo']['arrearBalance']; ?></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Interest</td>
                                    <td><?= $json['chargeslipInfo']['interestBalance']; ?></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Tower</td>
                                    <td><?= $json['chargeslipInfo']['towertax']; ?></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Current Tax</td>
                                    <td><?= $json['chargeslipInfo']['currentTax']; ?></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Total Demand</td>
                                    <td></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Advance</td>
                                    <td><?= $json['chargeslipInfo']['advacePayment']; ?></td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Already Paid this Year</td>
                                    <td> </td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Discount</td>
                                    <td><?= $json['chargeslipInfo']['discountPercentage']; ?></td>   
                                   </tr>
                                   <tr>   
                                    <td class="text-color">Total Payable</td>
                                    <td><?= $json['chargeslipInfo']['discountedBalance']; ?>   </td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Amount Received:</td>
                                    <td colspan="5"><?= $amt; ?> </td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Amount Received In Words</td>
                                    <td colspan="5">
                                        <?php $pricee=substr($amt,3);
                                        echo convertNumberToWordsForIndia($pricee);?>
                                    </td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Current Balance</td>
                                    <td colspan="5"> </td>   
                                   </tr>
                                   <tr>  
                                    <td class="text-color">Transaction Status</td>
                                    <td colspan="5">Paid</td>   
                                   </tr>
                                   <tr>  
                                    <td></td>
                                    <td colspan="5" class="text-center" onclick="window.print()" style="cursor: pointer;">Click Here to Print</td>   
                                   </tr>
                                   <tr>  
                                    <td></td>
                                    <td colspan="5" class="text-center text-color">Note:- Print the Page in A4 format</td>   
                                   </tr>
                        	    </table>
                        	    <div class="text-center">
                                 <button onclick="window.print()" class="pay-now"> Print</button>   
                                </div>

                        	</div>
                            </div>
                        </div>
                    </div>
                </section>
	<!--==============================footer================================-->
    

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=1450,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<script>
$(window).load(function () {
    if(getCookied('popup') != 'seen'){
       //$('.hover_bkgr_fricc').show();
   }
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
    setCookied('popup','seen',1);
        $('.hover_bkgr_fricc').hide();
    });
});



function setCookied(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookied(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name+'=; Max-Age=-99999999;';
}
</script>
</body>
</html>
