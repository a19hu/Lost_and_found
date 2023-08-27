<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APNAmart</title>
    <link rel="stylesheet" href="index.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  
</head>
<body>
    <style>
  .fixt{
            margin: 0;
            padding: 0;
            font-size: 20px;
        }
  .container-fluid{
            background-color:black;
        }
  .bi{
            height: 35px;
    width: 85px;
    color: white;
    padding: 0;
        }
  .carousel{
            display: flex;
            text-align: center;
            justify-content: center;
            margin: auto;
            width: 70%;
        }
  .cartf{
            display: flex;
            text-align: center;
            justify-content: center;
            margin: auto;
            width: 70%;
            border: 2px solid transparent;
            box-shadow: 5px 5px 5px 5px black;
            padding: 2rem;
        }
   .imageth{
    height: 120px;
    width: 160px;
}
.th{
    border: 2px solid rgb(98, 69, 69);
   width: 225px;
   font-size: 15px;
}
.th1{
    border: 2px solid rgb(98, 69, 69);
   width: 225px;
   color:white;
   font-size: 20px;
   text-transform: uppercase;
}
.tr{
  background-color: #5858d5;
}
.remove a{
   text-decoration: none;
   color: aliceblue;
}
.remove{
  background-color: brown;
  margin: 2px;
  height: 2rem;
  width: 5rem;
}
.remove:hover{
  background-color: red;
  margin: 2px;
}
.deatail a{
   text-decoration: none;
   color: aliceblue;
}
.deatail{
  background-color: #6161cb;
  margin: 2px;
  height: 2rem;
  width: 5rem;
}
.deatail:hover{
  background-color: blue;
  margin: 2px;
}
.buy{
  background-color: rebeccapurple;
  margin: 2px;
  height: 2rem;
  width: 5rem;
}
.buy:hover{
  background-color: green;
  margin: 2px;
}
.buy a{
   text-decoration: none;
   color: aliceblue;
}

    </style>
<div class="fixt">
<nav class="navbar navbar-expand-lg bg-body-tertiary, p=0">
  <div class="container-fluid">
  <div class="logo"><a href="index.php"><img src="image/logo (1).png" alt=""></a></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu ,m=2;" >
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="kitchen.php">Kitchen</a></li>
            <li><a class="dropdown-item" href="fashion.php">Fashion</a></li>
            <li><a class="dropdown-item" href="food.php">Food </a></li>
            <li><a class="dropdown-item" href="medicine.php">Medicine </a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="countact.php">contact us</a>
        </li>
      </ul>
            <div class="" > <a href="cart1.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a></div> 

<div class=""><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a></div>
    </div>
  </div>
</nav>
    </div>    