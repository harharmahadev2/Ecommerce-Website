<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet_product.css">

    <title>grocery</title>
  </head>
  <body background="img/background3.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index/index.php">Ecomm...</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index/index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../product/product_electronic.php" >Electronics</a></li>
                <li><a class="dropdown-item" href="../product/product_grocery.php" >Grocery</a></li>
                <li><a class="dropdown-item" href="../product/product_toys.php" >Toys</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about_us/about_us.html">About Us</a>
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

        <!-- card 1 -->
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div id="card1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#card1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#card1" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#card1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/atta1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/atta2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/atta3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
          <h5 class="card-title">ATTA</h5>
          <p class="card-text">Aashirvaad Atta/Godihittu - Whole Wheat, 10 kg Pouch</p>
          <hr>
          <p>Price : 500</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>

        <!-- card 2 -->
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div id="card2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#card2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#card2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#card2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/maggi1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/maggi2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/maggi3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
          <h5 class="card-title">MAGGI</h5>
          <p class="card-text">MAGGI 2-Minute Instant Noodles - Masala, 420 g Pouch</p>
          <hr>
          <p>Price : 15</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
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