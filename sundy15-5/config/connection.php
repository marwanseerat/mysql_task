<?php
$servername='localhost';
$dbusername='root';
$password='';
$database='sunday';

//Create connection
$con=mysqli_connect($servername,$dbusername,$password,$database);

//Check connection
if(!$con){
    die("Connection falied: ".mysqli_connect_error()) ;
}
echo "Connected Successfully";
?>