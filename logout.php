<?php
session_start();
if(isset($_SESSION['email'])){
    session_destroy();
    echo"in logout";
    echo"<script>location.href='enroll.php'</script>";
}
else{
    echo"in log out";
    echo"<script>location.href='test.php'</script>";}
?>