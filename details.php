<?php
$zone=$_REQUEST['zone'];
$ward=$_REQUEST['Ward'];
$chk=$_REQUEST['chk'];
$hno=$_REQUEST['hno'];
$name=$_REQUEST['name'];
echo $zone;
echo $ward;
echo $chk;
echo $hno;
echo $name;
$curl = curl_init();
curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://knndigitalpayment.com/AppSearchpid.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_SSL_VERIFYPEER=> FALSE,
            CURLOPT_SSL_VERIFYHOST=>FALSE,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('hno' => $hno ,'zone' => $zone ,'ward' => $ward ,'name' => $name ,'chk' => $chk),
            CURLOPT_HTTPHEADER => array(
                        'X-TP-ApiKey: c77f5eb4d7d525855522d7ac65c5487d'
            ),
));

$responsee = curl_exec($curl);
$responsee;
$jsonn = json_decode($responsee, true);
$err=curl_error($curl);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Property Tax Management System : Kanpur Municipal Corporation  : Kanpur Nagar Nigam  </title>
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
	<style>
.grid_12{margin-left:0px;}
.pay-now{background: green;
    color: #fff;
    border-radius: 5px;
    padding: 7px;
    border: none;
    cursor: pointer;
    widtd: max-content;}
</style>
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
</head>
<body id="page1" oncontextmenu="return false" style="
    background: #fff8c6;
">
<!--=========================================header=============================================-->
<style>
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4); 
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    widtd:100%;
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
    width: : 60%;
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
    width: : 30px;
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
}
</style>
<header id="header">
                    <div class="main" style="text-align:center;">
<img src="images/Header.JPG" class="img-fluid"/>
                        <div class="clear"></div>
                    </div>
                    <div class="tail-1 border-1">
                      <div class="main">
                            <div class="">
                                <article class="">
                                    <nav>
                                        <ul class="menu">
                                            <marquee style="
    color: #fff;
    font-size: 21px;
    padding: 5px;
">Pay Your Property Tax Before 31-March-2023</marquee>
                                            <!--<li class="first"><a class="active" href="index.php">Home<span></span></a></li>-->
                                            <!--<li><a href="http://kmc.up.nic.in" target="_blank" class="" style="width: 110px;">About us<span></span></a></li>-->
<!--<li><a href="download_receipt.php" style="width: 180px;">Download Receipt<span></span></a></li>-->
<!--<li><a href="#" style="width: 160px;">Raise a Concern<span></span></a></li>-->
<!--<li><a href="contact_us.php" style="width: 100px;">Contact<span></span></a></li>-->

                                        </ul>
                                        <div class="clear"></div>
                                    </nav>
                                </article>
                                <div class="clear"></div>
                            </div>
                        </div>
                </header>


			<!--	<marquee behavior="scroll" direction="left" class="scroll-left"><div style="margin-top:10px;color: #FF0000;font-size:22px;">&#x090F;&#x0915; &#x092E;&#x0941;&#x0936;&#x094D;&#x0924; &#x0938;&#x092E;&#x093E;&#x0927;&#x093E;&#x0928; &#x092F;&#x094B;&#x091C;&#x0928;&#x093E; (OTS) &#x0915;&#x0947; &#x0905;&#x0928;&#x094D;&#x0924;&#x0930;&#x094D;&#x0917;&#x0924; 100% &#x092C;&#x094D;&#x092F;&#x093E;&#x091C; &#x092E;&#x093E;&#x092B; &#x0915;&#x0947; &#x0938;&#x093E;&#x0925; &#x0915;&#x0930;&#x0947; &#x0905;&#x092A;&#x0928;&#x0947; &#x0939;&#x093E;&#x0909;&#x0938; &#x091F;&#x0948;&#x0915;&#x094D;&#x0938; &#x0915;&#x093E; &#x092D;&#x0941;&#x0917;&#x0924;&#x093E;&#x0928;</div></marquee>
             --><br />

<!--=========================================content=============================================-->
			  <section id="content">
                	<div class="main container">
                	           <?php
        if($jsonn){
        echo "<div class='container'>";
        echo "<div class='table-responsive'>
        <table class='table border table-hover'>
        <tr style='
    font-size: 21px;
    background: #a10000;
    color: #fff;
'>
            <td colspan='9' class='text-center'>Choose Your Details From List</td>
        </tr>
                                <tr style='
    border-bottom: 2px solid #a10000;
    color: #a10000;
    font-weight: 700;
'>
                                 <td> Name </td>
                                    <td> PropertyId </td>
                                    <td> Zone </td>
                                    <td> Ward </td>
                                    <td> Chak Number </td>
                                    <td> Area </td>
                                    <td> House Number </td>
                                    <td> Arv Number </td>
                                    <td> View </td>
                                </tr>
                                <tbody>
                          ";
         foreach($jsonn as $x => $x_value) {
            $ward_detals=$jsonn[$x];
                          echo "
                           <tr>
                                    <td class='w-25'> ".$ward_detals['Name']."</td>
                                    <td> ".$ward_detals['PropertyId']." </td>
                                    <td> ".$ward_detals['zone']." </td>
                                    <td> ".$ward_detals['ward']." </td>
                                    <td> ".$ward_detals['chk']." </td>
                                    <td> ".$ward_detals['area']." </td>
                                    <td> ".$ward_detals['houseNo']." </td>
                                    <td> ".$ward_detals['ARV']." </td>
                                    <td>
                                        <a href='detailsByPropnonew.php?propert_id=".$ward_detals['PropertyId'] ."' class='pay-now' name='search'>View</a>
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
'>*Please Enter Correct Details</p>";
}
    ?>
        
                        </div>
                    </div>
                </section>
	<!--==============================footer================================-->
    <footer>
        <div class="main container">
        	<div class="">
                <div class="wrapper">
                    <article class="">
					<div class="">
                       
                    </div>
                    	<center><span class="d-block" style="
    color: #a10000;
">Disclaimer - Content/Data on tdis application is published and managed by Kanpur Nagar Nigam.<br />
For any query regarding tdis application Please Contact Kanpur Nagar Nigam, email-itmekmc@gmail.com </span></center>
<center><strong>.</strong></center>
                        <!--{%FOOTER_LINK} -->
                    </article>
                </div>
            </div>
        </div>
    </footer>
<script>

function setCookied(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; patd=/";
}
function getCookied(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.lengtd;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.lengtd);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.lengtd,c.lengtd);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name+'=; Max-Age=-99999999;';
}
</script>
</body>
</html>
