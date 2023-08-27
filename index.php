<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
  
}
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<body> 
   <style>.image{
 max-height: 40%;
}</style>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/slidekitchen1.webp" class="d-block w-100 h-100 image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/slidekitchen2.webp" class="d-block w-100 h-100 image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/slidekitchen3.webp" class="d-block w-100 h-100 image" alt="...">
            </div>
        </div>
    </div>        
    <div class="look">
      <h1> Creazy Deals</h1>
        <div class="lookitems"><img src="image/home1.jpg" alt=""></div>
        <div class="lookitems"><img src="image/babyshop.jpg" alt=""></div>
        <div class="lookitems"><img src="image/home2.jpg" alt=""></div>
        <div class="lookitems"><img src="image/bz1.png" alt=""></div>
        <div class="lookitems"><img src="image/bz2.png" alt=""></div>
        <div class="lookitems"><img src="image/home4.jpg" alt=""></div>
        <div class="lookitems"><img src="image/kitchen1.webp" alt=""></div>
        <div class="lookitems"><img src="image/kitchen4.jpg" alt=""></div>
        <div class="lookitems"><img src="image/kitchen5.webp" alt=""></div>
        <div class="lookitems"><img src="image/kitchen2.jpg" alt=""></div>
    </div>
    <div class="look1">
        <h1>SHOP By Category</h1>
       <a href="kitchen.php"><div class="lookitem"><img src="Kitchen/images (5).jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home3.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home4.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen6.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen7.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/ajaytooth.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/babyshop.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bb-1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz4.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/cc-1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/cream1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/cream1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/so2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/bz3.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/cream1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home1.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home2.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home3.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/home4.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen6.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen7.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/kitchen8.jpg" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa1.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa2.png" alt=""></div></a>
        <a href=""></a><div class="lookitem"><img src="image/wa3.png" alt=""></div></a>
    </div>
    <div class="more">
       <a href="index.html"><button >1</button></a> 
       <a href=""><button>2</button></a> 
       <a href=""><button>more..</button></a>
    </div>  
  <script src="index.js"></script>
</body>
</html>
