<?php
$server="localhost";
$user="u593465879_kmcc";
$password="Kmc@123456";
$database="u593465879_kmcc";
$conn=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error())
{
    echo"connection faild";
}
?>