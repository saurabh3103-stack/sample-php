<?php
$server="db-mysql-blr1-63524-do-user-13373407-0.b.db.ondigitalocean.com";
$user="doadmin";
$password="AVNS_LEZb0BBopqzURNBhFRI";
$database="defaultdb";
$conn=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error())
{
    echo"connection faild";
}
?>