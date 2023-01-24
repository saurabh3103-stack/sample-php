<?php
$zone=$_REQUEST['zone'];
$ward=$_REQUEST['Ward'];
$chk=$_REQUEST['chk'];
$hno=$_REQUEST['hno'];
$name=$_REQUEST['name'];
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
<style type="text/css">
    body {
    background: #ddd; height:100%;overflow-x: hidden;}  

.open{color:green;background:#000;padding:10px;border-radius:20px;}

/* Preloader */
.container-preloader {
    align-items:center; display:flex; height:100%;
  justify-content:center; position:fixed; left:0; top:0; width:100%; z-index:900;
}
.container-preloader .animation-preloader {
    position:absolute; z-index: 100;}
/* Spinner Loading */
.container-preloader .animation-preloader .spinner {
  animation: spinner 1s infinite linear;
    border-radius: 50%;  border: 10px solid rgba(0, 0, 0, 0.2);
  border-top-color: green; /* It is not in alphabetical order so that you do not overwrite it */
  height: 9em;  margin: 0 auto 3.5em auto; width: 9em;
}
/* Loading text */
.container-preloader .animation-preloader .txt-loading {
  font: bold 5em 'Montserrat', sans-serif;
}
.container-preloader .animation-preloader .txt-loading .characters:before {
  animation: characters 4s infinite;  color: orange;
  content: attr(preloader-text);  left: 0;
  opacity: 0;  position: absolute;  top: 0;
  transform: rotateY(-90deg);
}
.container-preloader .animation-preloader .txt-loading .characters {
    color: rgba(0, 0, 0, 0.2);  position: relative;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(2):before {
  animation-delay: 0.2s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(3):before {
  animation-delay: 0.4s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(4):before {
  animation-delay: 0.6s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(5):before {
  animation-delay: 0.8s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(6):before {
  animation-delay: 1s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(7):before {
  animation-delay: 1.2s;
}
.container-preloader .loader-section {
  background-color: #ffffff;  height: 100%;
  position: fixed;  top: 0;  width: calc(50% + 1px);
}
.container-preloader .loader-section.section-left {
  left: 0;
}
.container-preloader .loader-section.section-right {
  right: 0;
}
/* Fade effect on loading animation */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.3s ease-out;
}
/* Curtain effect */
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
/* Animation of the preloader */
@keyframes spinner {
to {
    transform: rotateZ(360deg);
}}
/* Animation of letters loading from the preloader */
@keyframes characters {
  0%,
  75%,
  100% {
 opacity: 0;
 transform: rotateY(-90deg);
  }
  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }}
/* Laptop size back (laptop, tablet, cell phone) */
@media screen and (max-width: 767px) {
    /* Preloader */
    /* Spinner Loading */   
    .container-preloader .animation-preloader .spinner {
    height: 8em;
    width: 8em;
    }
    /* Text Loading */
    .container-preloader .animation-preloader .txt-loading {
      font: bold 3.5em 'Montserrat', sans-serif;
    }}
@media screen and (max-width: 500px) {
    /* Prelaoder */
    /* Spinner Loading */
    .container-preloader .animation-preloader .spinner {
    height: 7em;
    width: 7em;
    }
    /*Loading text */
    .container-preloader .animation-preloader .txt-loading {
      font: bold 2em 'Montserrat', sans-serif;
    }}


</style>
<script type="text/javascript">
        $(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(1000).queue(function() {
        $(this).remove();
      });}
  }, 2000);});
</script>
</head>
<body id="page1" oncontextmenu="return false" style="background: #fff8c6;">
                 <div id="preloader">
    <div id="container" class="container-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
                <div class="txt-loading">
                    <span preloader-text="K" class="characters">K</span>                    
                        <span preloader-text="A" class="characters">A</span>
                        <span preloader-text="N" class="characters">N</span>
                        <span preloader-text="P" class="characters">P</span>
                        <span preloader-text="U" class="characters">U</span>
                        <span preloader-text="R" class="characters">R</span>
                    </div>
                </div>  
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>  

<!--=========================================header=============================================-->

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
<br />

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
