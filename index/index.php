<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css">

    <title>ECOMM</title>
  </head>
  <body background="img/background3.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Ecomm...</a>
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
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about_us/about_us.php" target="_blank">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <button type="button" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
            Sign Up
          </button>
          <button type="button" class="btn btn-outline-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount_seller">
            Seller Login
          </button>
        </div>
      </div>
    </nav>
    <div class="info">
      <h1 style="color: white;"><i>ECOMMM</i></h1>
     <p style="color: white;">ECOMMM is the online ecommerce shopping platform. Which takes care of all product details and member    information regarding the sales and personal information. It is a platform which allows users to search the products of their interest from a variety of products.
                </p>
                
      </div>

      <!-- Button trigger modal -->
    <!-- Create Acount -->
    <div class="modal fade " id="CreateAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content CreateAccount">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create an account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body signp-form">
            <form action="signuphelp.php" method="POST" class="row g-3">
                <div>
                  <p class="Signup__instructions">Already have an account?
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AlreadyAccount">
                  Sign in
                </button>
                </p>
        
                
                </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="Email" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label" >Password</label>
              <input type="password" class="form-control" id="inputPassword4"name="Password" required>
            </div>
            <div class="col-12">
              <label for="inputName" class="form-label" >Name</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="" name="Name" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label" >Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor" name="Address" required>
            </div>
            <div class="col-md-4">
              <label for="inputPhone" class="form-label">Phone No</label>
              <input type="text" class="form-control" id="inputCity" name="Phone_no" required>
            </div>  
            <div class="col-md-4">
              <label for="inputZip" class="form-label">Pincode</label>
              <input type="text" class="form-control" id="inputZip" name="Pincode" required>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
          </form>
        </div>
      </div>
    </div>

     <!-- already have account  -->
    <div class="modal fade " id="AlreadyAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content AlreadyAccount">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Customer's Sign in</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="loginhelp.php" method="POST" class="row g-3">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="Email" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="Password" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
        </form>
      </div>
    </div>





    <!-- for Seller -->
    <!-- Button trigger modal -->
    <!-- Create Acount -->
    <div class="modal fade " id="CreateAccount_seller" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content CreateAccount">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create an account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body signp-form">
            <form action="signuphelp_seller.php" method="POST" class="row g-3">
                <div>
                  <p class="Signup__instructions">Already have an account?
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AlreadyAccount_seller">
                  Sign in
                </button>
                </p>
                
                </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="input_Email4" name="Email_s" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label" >Password</label>
              <input type="password" class="form-control" id="input_Password4"name="Password_s" required>
            </div>
            <div class="col-12">
              <label for="inputName" class="form-label" >Name</label>
              <input type="text" class="form-control" id="input_Address2" placeholder="" name="Name_s" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label" >Address</label>
              <input type="text" class="form-control" id="input_Address" placeholder="Apartment, studio, or floor" name="Address_s" required>
            </div>
            <div class="col-md-4">
              <label for="inputPhone" class="form-label">Phone No</label>
              <input type="text" class="form-control" id="inputCity" name="Phone_no_s" required>
            </div>  
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
          </form>
        </div>
      </div>
    </div>

     <!-- already have account  -->
    <div class="modal fade " id="AlreadyAccount_seller" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content AlreadyAccount">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Seller's Sign in</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="loginhelp_seller.php" method="POST" class="row g-3">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="Email_s" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="Password_s" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
        </form>
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