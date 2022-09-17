<?php
$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection is Establish !";
}
else{
    echo "Error connection failed !";
}

mysqli_select_db($connection, 'authentication');

$email = $_POST['Email'];
$password = $_POST['Password'];
$name = $_POST['Name'];
$address = $_POST['Address'];
$phone_no = $_POST['Phone_no'];
$pincode = $_POST['Pincode'];

// email validation from database

$query = "select * from credentials where email='$email'";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);

if($count>0){
    echo "<script>alert('Username or Email already exist . Try other Email or Username ');
    window.location.href='index.php';</script>";
    // header('location:index.php');
}
else{
    $data = "INSERT INTO credentials (Email,Passwd,Name,Address,Phone_no,Pincode) values ('$email','$password','$name','$address',$phone_no,$pincode)";
    mysqli_query ($connection,$data);
    echo "<script>alert('Account Created');
    window.location.href='index.php';</script>";
//    header('location:index_after_login.php');    
}


?>