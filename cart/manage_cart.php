<?php
session_start();
// session_destroy();
$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection is Establish !";
}
else{
    echo "Error connection failed !";
}

if(isset($_POST["Add_To_cart"])){
    mysqli_select_db($connection, 'cart');
    $customer_id=$_SESSION["email"];
    $prod_id = $_POST["item_id"];
    $prod_name = $_POST["item_name"];
    $seller_id = $_POST["item_seller_id"];
    $prod_price = $_POST["item_price"];

    $data = "INSERT INTO cart(Customer_id,Prod_id,Prod_name,Seller_id,prod_price) values ('$customer_id','$prod_id','$prod_name','$seller_id','$prod_price')";

    mysqli_query ($connection,$data);
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Add_To_cart'])){
        if(isset($_SESSION['cart'])){
            $myitem=array_column($_SESSION['cart'],'item_id');
            if(in_array($_POST['item_id'],$myitem)){
                echo "<script>alert('Item Already Added');
                window.location.href='../product_after_login/all_product_after_login.php';
                </script>";

            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array(
                    'item_id'  => $_POST["item_id"],
                    'item_name'  => $_POST["item_name"],
                    'item_price'  => $_POST["item_price"],
                    'item_seller_id'  => $_POST["item_seller_id"],
                    'quantity' => 1
                );
                // print_r($_SESSION['cart']);
                echo "<script>alert('Item Added');
                    window.location.href='../product_after_login/all_product_after_login.php';
                    </script>";
            }
        }
        else{
            $_SESSION['cart'][0]=array(
                'item_id'  => $_POST["item_id"],
                'item_name'  => $_POST["item_name"],
                'item_price'  => $_POST["item_price"],
                'item_seller_id'  => $_POST["item_seller_id"],
                'quantity' => 1
            );
            // print_r($_SESSION['cart']);
            echo "<script>alert('Item Added');
                window.location.href='../product_after_login/all_product_after_login.php';
                </script>";
        }
    }
    if(isset($_POST['remove_item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['item_id']==$_POST['item_id']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='my_cart.php';
                </script>";
            }
        }
    }
}