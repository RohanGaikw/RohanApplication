<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "Rohan@123";
$dbname = "emp";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{

}
else
{
     echo "connection failed".mysqli_connect_error();

}
?>