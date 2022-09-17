<?php
 session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet_product.css">

    <title>ECOMM</title>
  </head>
  <body background="img/background3.jpg">
  <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);   
              }
            ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index/index.php">Ecomm...</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="all_product_after_login.php">Products</a>
            </li>
            <li>
              <a class="nav-link" href="../cart/my_cart.php">My Cart (<?php echo $count; ?>)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.html">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <!-- <button type="button" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
            Sign Up
          </button> -->
        </div>
      </div>
    </nav>

  <div class="container mg-4">
      <div class="row">
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
        <img src="../img/akhil_sharma.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            AKHIL SHARMA <br>(CO-FOUNDER)</p>
          </div>
        </div>  
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
        <img src="../img/keval.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              KEVAL SAVLA <br>(CO-FOUNDER)
            </p>
          </div>
        </div> 
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
        <img src="../img/prathmesh.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              PRATHMESH SHARMA <br>(CO-FOUNDER)
            </p>
          </div>
        </div> 
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
