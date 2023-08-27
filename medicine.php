<?php
include 'navbar.php';
?>
<?php

include 'data.php';

if(isset($_POST['done'])){
	

 $username = $_POST['name'];
 $price = $_POST['price'];
 $picture = $_POST['picture'];

 $q = "INSERT INTO `cart`(`name`, `price`,`picture`) VALUES  ('$username','$price','$picture')";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APNAmart</title>
    <link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="all.css">
</head>
<body>
    <style>
        .add input{
    border: 2px solid red;
    width: 9rem;
    background-color: brown;
  }
  .add input:hover{
    
    background-color:red;
  }
    </style>
    <div class="container">
        <div class="sidebar">
            <div class="sidebody" style="height: 70vh;">
            <input type="text"class="search" id="myInput" onkeyup="myFunction()" placeholder="Search .." title="Type in a name">
            <div style="margin: 2px 0;">
                <div class="filter">
                    <h3>Brands</h3><hr>
                    
                </div>
                <div class="filter">
                    <h3>Items</h3><hr>
                    <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                        <button class="btn" onclick="filterSelection('spooons')"> spooons</button>
                        <button class="btn" onclick="filterSelection('lids')"> lids</button>
                        <button class="btn" onclick="filterSelection('rack')"> rack</button>
                        <button class="btn" onclick="filterSelection('gas')"> gas</button>
                    </div>
                </div>
                <div class="filter">
                    <h3>price</h3><hr>
                       <input type="range">
                </div>
            </div>
        </div>
    </div>
        <div class="data">
            <div class="header">
                <p>Kitchen</p>
            </div>
            <div class="body">
                <div id="root">
                <ul id="myUL">
                    <div class='box filterDiv gas'>
                        <div class='img-box'>
                            <img class='images' src="medicine/-montiver-l-anti-cold-tablet-765.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv gas"><a href="#" name="name"> utensils</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="utensils">
                                <input type="hidden" class="file" name="price"  value="${price}.00">
                                <input type="hidden" class="file" name="picture"  value="medicine/-montiver-l-anti-cold-tablet-765.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv gas'>
                        <div class='img-box'>
                            <img class='images' src="medicine/2_Amiabel Product Shot-457.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv gas"><a href="#" name="name"> stand</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="stand">
                                <input type="hidden" class="file" name="price"  value="&#8377 500.00/- ">
                                <input type="hidden" class="file" name="picture"  value="medicine/2_Amiabel Product Shot-457.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv gas'>
                        <div class='img-box'>
                            <img class='images' src="medicine/amlod-at-250x250.webp">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv gas"><a href="#" name="name"> gas</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="gas">
                                <input type="hidden" class="file" name="price"  value="medicine/amlod-at-250x250.webp">
                                <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv spooons'>
                        <div class='img-box'>
                            <img class='images' src="medicine/ASC-Buy-blister-pack-rb.png">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv spooons"><a href="#" name="name"> spooons</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="spoons">
                                <input type="hidden" class="file" name="price"  value="medicine/ASC-Buy-blister-pack-rb.png">
                                <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv cars'>
                        <div class='img-box'>
                            <img class='images' src="medicine/capsules-693.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv cars"><a href="#" name="name"> oven</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="oven">
                                <input type="hidden" class="file" name="price"  value="medicine/capsules-693.jpg">
                                <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv rack'>
                        <div class='img-box'>
                            <img class='images' src="medicine/dummy-medicine.webp">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv rack"><a href="#" name="name"> rack</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="rack">
                                <input type="hidden" class="file" name="price"  value="medicine/dummy-medicine.webp">
                                <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv cars'>
                        <div class='img-box'>
                            <img class='images' src="medicine/ECHORT-6MGTablet.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv cars"><a href="#" name="name"> dinning</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="dinning">
                                <input type="hidden" class="file" name="price"  value="medicine/ECHORT-6MGTablet.jpg">
                                <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv cars'>
                        <div class='img-box'>
                            <img class='images' src="medicine/Glycodin-Exp-Syrup-50-ml.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv cars"><a href="#" name="name"> Teapot</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="Teapot">
                                <input type="hidden" class="file" name="price"  value="&#8377 500.00/-">
                                <input type="hidden" class="file" name="picture"  value="medicine/Glycodin-Exp-Syrup-50-ml.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv cars'>
                        <div class='img-box'>
                            <img class='images' src="medicine/imodium-capsule-4-s_4164538d-4c5b-4d09-b252-0eac15aefcf6.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv cars"><a href="#" name="name"> cooker</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="cooker">
                                <input type="hidden" class="file" name="price"  value="${price}.00">
                                <input type="hidden" class="file" name="picture"  value="medicine/imodium-capsule-4-s_4164538d-4c5b-4d09-b252-0eac15aefcf6.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv cars'>
                        <div class='img-box'>
                            <img class='images' src="medicine/loperamide2mg.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv cars"><a href="#" name="name"> Steamer</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="Steamer">
                                <input type="hidden" class="file" name="price"  value="${price}.00">
                                <input type="hidden" class="file" name="picture"  value="medicine/loperamide2mg.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                    <div class='box filterDiv lids'>
                        <div class='img-box'>
                            <img class='images' src="medicine/pantoprazole-domperidone-capsule-199.jpg">
                        </div> 
                        <div class='bottom'>
                            <div class="filterDiv lids"><a href="#" name="name"> lids</a></div><br>
                            <h2 name="price">&#8377 500.00/- </h2>
                            <form action="medicine.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return checkWords()">
                                <input type="hidden" class="file" name="name"  value="lids">
                                <input type="hidden" class="file" name="price"  value="${price}.00">
                                <input type="hidden" class="file" name="picture"  value="medicine/pantoprazole-domperidone-capsule-199.jpg">
                               <div class="add"> <input type="submit" value="Add to cart" name="done" ></div>
                            </form>
                        </div>
                    </div>
                </ul>
                </div>
            </div>
        </div>
    </div>
<script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("box");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
</script>
</body>
</html>