<?php


$username ="root";
$password ="";
$server ="localhost";
$db ="lite";

$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    echo "error";


}
?>