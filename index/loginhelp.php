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

session_start();
$_SESSION["email"] = $email;

// $name = $_POST['Name'];
// $address = $_POST['Address'];
// $phone_no = $_POST['Phone_no'];
// $pincode = $_POST['Pincode'];

$query = "select * from credentials where email='$email' and passwd='$password'";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);

if($count>0){
    echo "<script>alert('Login Successful');
    window.location.href='index_after_login.php';</script>";
//    header('location:index_after_login.php');
}
else{
    echo "<script>alert('email or password invalid');
    window.location.href='index.php';</script>";
    // header('location:index.php');
}

?>