<?php

include 'data.php';
include 'navbar.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $password = $_POST['price'];
 $q = " INSERT INTO `cart`(`name`, `price`) VALUES ( '$username', '$password' )";
 $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="all.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidehead">
                <hr style="margin: 1px 0; border: 1px solid #282525">
            </div>
            <div class="sidebody" style="height: 70vh;">
                <div class="searchBar">
                    <input placeholder="Search..." id="searchBar" name="searchBar" type="text">
                    <i class="fa-solid fa-magnifying-glass glass" id="btn"></i>
                </div>
                <div style="margin: 2px 0;">
                    <h1 >Brand</h1>
                    <div>d</div>
                    <div>d</div>
                    <div>d</div>
                    <div>d</div>

                </div>
            </div>
            <div class="sidefoot">
                <hr style="margin: 10px 0; border: 1px solid #1c1919">
                <div class="social-icons">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-github"></i>
                </div>
            </div>

        </div>
        <div class="data">
            <div class="header">
                <p>Bedsheets</p>
            </div>
            <div class="body">
                <div id="root"></div>
            </div>
        </div>
    </div>

    <script>
        const product = [
            {
                id: 0,
                image: 'sh1.webp',
                title: 'Z Flip Foldable Mobile',
                price: 120,
            },
            {
                id: 0,
                image: 'sh1.webp',
                title: 'Z Flip Foldable Mobile',
                price: 120,
            },
            {
                id: 0,
                image: 'sh1.webp',
                title: 'Z Flip Foldable Mobile',
                price: 120,
            },
            {
                id: 0,
                image: 'sh1.webp',
                title: 'Z Flip Foldable Mobile',
                price: 120,
            },
            {
                id: 1,
                image: 'image/hh-2.jpg',
                title: 'Air Pods Pro',
                price: 60,
            },
            {
                id: 2,
                image: 'image/ee-3.jpg',
                title: '250D DSLR Camera',
                price: 230,
            },
            {
                id: 3,
                image: 'image/aa-1.jpg',
                title: 'Headphones',
                price: 100,
            },
            {
                id: 4,
                image: 'image/bb-1.jpg',
                title: 'Audio Microphone',
                price: 230,
            },
            {
                id: 5,
                image: 'image/cc-1.jpg',
                title: 'Smart Watch',
                price: 100,
            },
        ];

        const categories = [...new Set(product.map((item) => { return item }))]

        document.getElementById('searchBar').addEventListener('keyup', (e) => {
            const searchData = e.target.value.toLowerCase();
            const filteredData = categories.filter((item) => {
                return (
                    item.title.toLowerCase().includes(searchData)
                )
            })
            displayItem(filteredData)
        });

        const displayItem = (items) => {
            document.getElementById('root').innerHTML = items.map((item) => {
                var { image, title, price } = item;
                return (
                    `<div class='box'>
                        <div class='img-box'>
                            <img class='images' src=${image}></img>
                        </div> 
                        <div class='bottom'>
                            <p name="name">${title}</p>
                            <h2 name="price">$ ${price}.00</h2>
                        <button name="done">Add to cart</button>
                        </div>
                    </div>`
                )
            }).join('')
        };
        displayItem(categories);

    </script>
</body>

</html>