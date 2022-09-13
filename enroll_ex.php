<?php

$email="admin@gmail.com";
$pass="admin";

session_start();
if(isset($_SESSION['email'])){
    echo "<h1>Welcome".$_SESSION['email']."</h1>";
    echo"<a href='login.php'><input type=buttton value=logout name=logout></a>";

}
else{
    if($_POST['email']==$email && $_POST['pass']==$pass){
        $_SESSION['email']=$email;
        echo"welcome you have logined";
    }
    else{
       echo" <script>
            alert('incorrect password');
        </script>";

    }
}

?>