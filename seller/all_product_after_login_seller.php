<?php
 session_start();
 $connect = mysqli_connect("localhost", "root");  
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet_product_login_seller.css">

    <title>electronic</title>
  </head>
  <body background="img/background3.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
       <a class="navbar-brand" href="index_after_login_seller.php">Ecomm...</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index_after_login_seller.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="all_product_after_login_seller.php">Products</a>
            </li>
        </div>
        <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddProduct">
                  Add Product
                </button>
              
          <div class="modal fade " id="AddProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content AddProduct">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create an Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body signp-form">
                  <form action="add_product.php" method="POST" class="row g-3"><!-- add database location-->
                      
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Product ID:</label>
                    <input type="text" class="form-control" id="inputEmail4" name="prod_id" required>
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label" >Product Name:</label>
                    <input type="text" class="form-control" id="inputPassword4"name="prod_name" required>
                  </div>
                  <div class="col-12">
                    <label for="inputName" class="form-label" >Product Color:</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="prod_color" required>
                  </div>
                  <div class="col-12">
                    <label for="inputName" class="form-label" >Seller ID:</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="seller_id" required>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label" >Product Price:</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Enter Price" name="prod_price" required>
                  </div>
                  <div class="col-md-4">
                    <label for="inputPhone" class="form-label">Product Image:</label>
                    <input type="text" class="form-control" id="inputCity" name="prod_img" required>
                  </div>  
                  
                  <!-- <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div> -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
                </form>
              </div>
            </div>
            
          </div>
              </div>
      </div>
    </nav>
    <div class="container mg-4 mt-5">
      <div class="row">
        <?php
      mysqli_select_db($connect, 'product');  
                $query = "SELECT * FROM product ORDER BY prod_id ASC";  
                $result = mysqli_query($connect, $query);  
               
                if(mysqli_num_rows($result) > 0)  
                {   
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
              <div class="col-lg-3">
                <!-- <form method="post" action="all.php?action=add&id=<?php echo $row["prod_id"]; ?>"> -->
                <form action="../cart/manage_cart.php" method="POST">
                  <div class="card col-lg-4 mx-auto my-5" style="width: 18rem;">
                        <img src="<?php echo $row["prod_img"]; ?>" class="img-responsive" /><br />
                        <div class="card-body">
                               <ul class="card-info">
                               <li><h4 class="card-text">Name : <?php echo $row["prod_name"]; ?></h4></li> <br>
                               <li><h4 class="card-text">Product Id : <?php echo $row["prod_id"]; ?></h4></li> <br>
                               <li><h4 class="card-text">Color : <?php echo $row["prod_color"]; ?></h4></li><br>
                               <li><h4 class="card-text">Seller Id : <?php echo $row["seller_id"]; ?></h4> </li>
                               </ul>
                               <hr>
                               <h4 class="text-danger">&#8377; <?php echo $row["prod_price"]; ?></h4>  
                               <!-- <input type="text" name="quantity" class="form-control" value="1" />   -->
                               <input type="hidden" name="item_id" value="<?php echo $row["prod_id"]; ?>" /> 
                               <input type="hidden" name="item_name" value="<?php echo $row["prod_name"]; ?>" /> 
                               <input type="hidden" name="item_price" value="<?php echo $row["prod_price"]; ?>" />
                               <input type="hidden" name="item_seller_id" value="<?php echo $row["seller_id"]; ?>" />  
                               <!-- <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  -->

                        </div>
                    </div>
                </form>
              </div>
          <?php  
                     }     
                }  
                ?> 
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