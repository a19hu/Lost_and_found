<?php
include 'data.php';
if (isset($_GET['removename'])) {
    $name = $_GET['removename'];
    $sq="delete from `cart` where name = '$name'";
    $result = mysqli_query($con,$sq);
    if ($result) {
        header('location:cart1.php');
    }
}
?>