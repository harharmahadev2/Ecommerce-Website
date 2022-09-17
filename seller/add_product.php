<?php
$connection = mysqli_connect('localhost','root');

// if($connection){
//     echo "Connection is Establish !";
// }
// else{
//     echo "Error connection failed !";
// }

mysqli_select_db($connection, 'product');

$prod_id = $_POST['prod_id'];
$prod_name = $_POST['prod_name'];
$prod_color = $_POST['prod_color'];
$seller_id = $_POST['seller_id'];
$prod_price = $_POST['prod_price'];
$prod_img = $_POST['prod_img'];

$query = "select * from product where prod_id='$prod_id'";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);

if($count>0){
    echo "<script>alert('Product Already Exist with this Product id -> $prod_id !!');
    window.location.href='all_product_after_login_seller.php';</script>";
    // header('location:index.php');
}
else{
    $data = "INSERT INTO product (prod_id,prod_name,seller_id,prod_color,prod_price,prod_img) values ('$prod_id','$prod_name','$seller_id','$prod_color',$prod_price,'$prod_img')";
    mysqli_query ($connection,$data);
    echo "<script>alert('Product Added');
    window.location.href='all_product_after_login_seller.php';</script>";
//    header('location:index_after_login.php');    
}

?>