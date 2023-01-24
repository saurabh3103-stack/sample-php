<?php
$server="255.53.241.190";
$user="doadmin";
$password="AVNS_LEZb0BBopqzURNBhFRI";
$database="defaultdb";
$conn=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error())
{
    echo"connection faild";
}

?>