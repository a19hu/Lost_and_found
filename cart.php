

<?php
echo "hii";
include 'data.php';  // connect data file
$selectqurey = "select* from cart";  // here add table name  like crudtable

 $query = mysqli_query($con,$selectqurey );
 //$nums = mysqli_num_rows($query);
 //echo $nums;
 while($res = mysqli_fetch_array($query)){
    echo $res["name"];
    echo $res["price"];
    echo "<br>";
 }
?>