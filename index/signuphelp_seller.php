<?php
$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection is Establish !";
}
else{
    echo "Error connection failed !";
}

mysqli_select_db($connection, 'seller');

$email_s = $_POST['Email_s'];
$password_s = $_POST['Password_s'];
$name_s = $_POST['Name_s'];
$address_s = $_POST['Address_s'];
$phone_no_s = $_POST['Phone_no_s'];

$query = "select * from credentials_seller where email_s='$email_s' ";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);

if($count>0){
    echo "<script>alert('Username or Email already exist . Try other Email or Username ');
    window.location.href='index.php';</script>";
    // header('location:index.php');
}
else{
    $data = "INSERT INTO credentials_seller (Email_s,Passwd_s,Name_s,Address_s,Phone_no_s) values ('$email_s','$password_s','$name_s','$address_s',$phone_no_s)";
    mysqli_query ($connection,$data);
    echo "<script>alert('Account Created');
    window.location.href='index.php';</script>";
}

?>