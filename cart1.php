<?php
include 'navbar.php';
?>
<div class="cartf">
<table>
    <tr class="tr">
                <th class="th1">name</th>
                <th class="th1">image</th>
                <th class="th1">price</th>
                <th class="th1">operation</th>
                <th class="th1">Buy</th>
            </tr>
    <?php

                include 'data.php';  
                $selectqurey = "select* from cart"; 
                $query = mysqli_query($con,$selectqurey );
                while($res = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<th class='th'>".$res["name"]. "</th>";
                    echo "<th class='th'><img src='".$res["picture"]. "'class='imageth'></th>";
                    echo "<th class='th'>".$res["price"]. "</th>";
                    echo "<th class='th'>
                    <button class='remove'><a href='remove.php?removename=".$res["name"]. "'>remove</a></button>
                    <button class='deatail'><a href=' '>detail</a></button>
                    </th>";
                    echo "<th class='th'>
                    <button class='buy'><a href='".$res["buy"]. " '>Buy Now</a></button>
                    </th>";

                    echo "</tr>";
                }
            ?>
            
            </table>
</div>
<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

unlink("test.txt");
?>
        