<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet_product.css">

    <title>electronic</title>
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
              <a class="nav-link active" aria-current="page" href="../index/index.php">Home</a>
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
                <img src="../img/lap1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/lap2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/lap3.png" class="d-block w-100" alt="...">
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

          <h5 class="card-title">DELL INSPIRON</h5>

          <p class="card-text">Inspiron 13 Laptop
          11th Generation Intel® Core™ i5-11320H Processor (8MB Cache, up to 4.5GHz</p>

          <hr>
          <ul>
            <li>Quantity : 0</li>
            <li>Cost : 50000</li>
            <li>product_id : pro123</li>
            <li>seller_id : sel123</li>
            
              <a href="#" class="btn btn-primary">
                <button type="submit" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                  Add to cart
                </button>
              </a>
            
          </ul>

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
                <img src="../img/iphone1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/iphone2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/iphone3.jpeg" class="d-block w-100" alt="...">
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
          <h5 class="card-title">APPLE IPHONE</h5>
          <p class="card-text">APPLE iPhone 12 (Blue, 128 GB)
          128 GB ROM 15.49 cm (6.1 inch) Super Retina XDR Display 12MP + 12MP </p>
          <hr>

          <ul>
            <li>Quantity : 0</li>
            <li>Cost : 100000</li>
            <li>product_id : pro124</li>
            <li>seller_id : sel124</li>
            
              <a href="#" class="btn btn-primary">
                <button type="submit" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                  Add to cart
                </button>
              </a>
            
          </ul>
          
        </div>
      </div>
        <!-- card 3 -->
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div id="card3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#card3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#card3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#card3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/lgtv2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/lgtv1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/lgtv3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
          <h5 class="card-title">LG TV</h5>
          <p class="card-text">LG 108 cm (43 inch) Ultra HD (4K) LED Smart TV  (43UP7500PTZ) Resolution: Ultra HD (4K) 3840 x 2160 Pixels
          </p>
          <hr>

          <ul>
            <li>Quantity : 0</li>
            <li>Cost : 150000</li>
            <li>product_id : pro125</li>
            <li>seller_id : sel125</li>
            
              <a href="#" class="btn btn-primary">
                <button type="submit" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                  Add to cart
                </button>
              </a>
            
          </ul>
          
        </div>
      </div>

      <!-- card 4 -->
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div id="card4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#card4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#card4" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#card4" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/ifbac1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/ifbac2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/ifbac3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card4" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card4" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
          <h5 class="card-title">IFB AC</h5>
          <p class="card-text">IFB 7 Stage Air Treatment 1.5 Ton 5 Star Split Inverter PM 0.3 Filter Gold Series AC - White  (IACI18GB5G3C, Copper Condenser)</p>
          <hr>

          <ul>
            <li>Quantity : 0</li>
            <li>Cost : 50000</li>
            <li>product_id : pro126</li>
            <li>seller_id : sel126</li>
            
              <a href="#" class="btn btn-primary">
                <button type="submit" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                  Add to cart
                </button>
              </a>
            
          </ul>
          
        </div>
      </div>

      <!-- card 5 -->
        <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div id="card5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#card5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#card5" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#card5" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/miband3.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/miband2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/miband1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#card5" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#card5" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
          <h5 class="card-title">SMART BAND</h5>
          <p class="card-text">Mi Smart Band 5  (Black Strap, Size : Regular) Display: 1.1 inch full touch AMOLED Display with 450 nits of brightness</p>
          <hr>

          <ul>
            <li>Quantity : 0</li>
            <li>Cost : 5000</li>
            <li>product_id : pro127</li>
            <li>seller_id : sel127</li>
            
              <a href="#" class="btn btn-primary">
                <button type="submit" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                  Add to cart
                </button>
              </a>
            
          </ul>
          
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