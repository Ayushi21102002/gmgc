<?php
$conn = mysqli_connect("localhost", "root", "", "gmgc")or die;
    echo"done";

session_start();

$email = $_POST['email'];
$password = $_POST['pass'];

$q="SELECT * from `be_inquiry` WHERE 'email'='$email' AND 'password'='$password'";
if($q){
    echo"<h2>founded</h2>";
    echo"$email";
}
$check=mysqli_num_rows($q);

if($check>0){
    $_SESSION['email']=$email;
}
else{
    echo"wrong entered";
}
?>
