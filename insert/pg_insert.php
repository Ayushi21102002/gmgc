<?php

    // include '../insert/includes/connection.php';
    $conn = mysqli_connect('localhost', 'root', '', 'gmgc');

    if (isset($_POST['submit'])) {
        
       $s_course = $_POST['s_course'];
       $s_branch = $_POST['s_branch'];
       $s_name = $_POST['s_name'];
       $s_address = $_POST['s_address'];
       $s_contact = $_POST['s_contact'];
       $p_contact= $_POST['p_contact'];
       $s_gender = $_POST['s_gender'];
       $dob = $_POST['dob'];
       $bsc_pr = $_POST['bsc_pr'];
       $bsc_main_sub = $_POST['bsc_main_sub'];
       $bsc_p_year = $_POST['bsc_p_year'];
       $email = $_POST['email'];

       $query = "INSERT INTO `pg_inquiry`(`s_course`, `s_branch`, `s_name`,`s_address` , `s_contact`, `p_contact`,`s_gender`,`dob`, `bsc_pr`, 
       `bsc_main_sub`, `bsc_p_year`,`email`) VALUES ('$s_course', '$s_branch', '$s_name','$s_address' ,'$s_contact', '$p_contact','$s_gender',
       '$dob', '$bsc_pr', '$bsc_main_sub','$bsc_p_year','$email' )";
       
       $result = mysqli_query($conn, $query);
    
       if ($result)  {
           
           echo "success";
       } 
       else {

       echo "fail";
       }
}

mysqli_close($conn);

?>
