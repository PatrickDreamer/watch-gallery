<?php
  session_start();
  if(!isset($_SESSION['username']))
  header("Location: loginpage.php")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="" IE="edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!--Css Only-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
    <style>
      .img_small {
        width: 30%;
        height: 30%;
      }
      h2 {
        text-align: center;
      }
      </style>
  </head>
  <body>

    <!-- Header -->
  <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="home.php"
                >Melbourne Watch Gallery</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginpage.php">Product Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">Add new product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logoutpage.php">Logout</a>
            </li>
          </ul>

          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="header">
      <img class="logo" src="images/logo.jpg" alt="" />
      <h1>Melbourne Watch Gallery</h1>
    </div>
    <div class="container">
        <h2>Add a new product</h2>
        <form method="post" action="insertproduct.php" >
            <div class="mb-3">
                <label for="product_name" class="form-label col-lg-12">Product name</lable>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="mb-3">
                <label for="overview"  class="form-label col-lg-12">Overview</lable>
                <textarea rows= 5 class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="model_no" class="form-label col-lg-12">Model no</lable>
                <input type="text" class="form-control" id="model_no" name="model_no">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label col-lg-12">Price</lable>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label col-lg-12">Image 1</lable>
                <input type="text" class="form-control" id="image_1" name="image_1">
            </div>
            <div class="mb-3">
                <label for="image_2" class="form-label col-lg-12">Image 2</lable>
                <input type="text" class="form-control" id="image_2" name="image_2">
            </div>
            <div class="mb-3">
                <label for="image_3" class="form-label col-lg-12">Image 3</lable>
                <input type="text" class="form-control" id="image_3" name="image_3">
            </div>
            <div class="mb-3">
                <label for="image_4" class="form-label col-lg-12">Image 4</lable>
                <input type="text" class="form-control" id="image_4" name="image_4">
            </div>
            <button type="submit" class="btn btn-primary">Add product</button>
        </form>
   </div>
  </body>
</html>
