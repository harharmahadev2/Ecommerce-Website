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
    <!-- <link rel="stylesheet" type="text/css" href="../style/stylesheet_product.css"> -->

    <title>Cart</title>
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
       <a class="navbar-brand" href="../index/index_after_login.php">Ecomm...</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index/index_after_login.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../product_after_login/all_product_after_login.php">Products</a>
            </li>
            <li>
              <a class="nav-link" href="my_cart.php">My Cart (<?php echo $count; ?>)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about_us/about_us.php">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <!-- <button type="button" class="btn btn-primary sign_up" data-bs-toggle="modal" data-bs-target="#CreateAccount">
            Sign Up
          </button> -->
          <div>
              <a class="nav-link" href="../cart/my_cart.php" class="btn btn-success"><button class="btn btn-success" >My Cart (<?php echo $count; ?>) </button></a>
</div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Seller Id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total=0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                // print_r($value);
                                $sr=$key+1;
                                $total=$total+$value['item_price'];
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[item_id]</td>
                                    <td>$value[item_name]</td>
                                    <td>&#8377;$value[item_price]</td>
                                    <td>$value[item_seller_id]</td>
                                    <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='1'</td>
                                    <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button class='btn btn-sm btn-outline-danger' name='remove_item'>REMOVE</button>
                                        <input type='hidden' name='item_id' value='$value[item_id]'>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Totol : &#8377; <?php echo $total ?></h4>
                    <?php 
                    $_SESSION["totol_amount"]=$total;
                    ?>
                    <br>
                    <form action="../payment/payment.php">
                        <button class="btn btn-primary btn-block">Make Payment</button>
                    </form>
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
 -->

"disturbance"