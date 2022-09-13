<?php

// include '../insert/includes/connection.php';
$conn = mysqli_connect('localhost', 'root', '', 'gmgc');

if (isset($_POST['submit'])) {
    
   $s_course = $_POST['s_course'];
   $g_course = $_POST['g_course'];
   $s_name = $_POST['s_name'];
   $s_address = $_POST['s_address'];
   $s_contact = $_POST['s_contact'];
   $p_contact= $_POST['p_contact'];
   $s_gender = $_POST['s_gender'];
   $dob = $_POST['dob'];
   $s_ssc = $_POST['s_ssc'];
   $ssc_seatno = $_POST['ssc_seatno'];
   $s_hsc = $_POST['s_hsc'];
   $hsc_seatno = $_POST['hsc_seatno'];
   $graduation_pr = $_POST['graduation_pr'];
   $graduation_p_year = $_POST['graduation_p_year'];
   $cmat = $_POST['cmat'];
   $email = $_POST['email'];

 
   $sql = "INSERT INTO `mca_inquiry`(`s_course`, `g_course`, `s_name`, `s_address`, `s_contact`, `p_contact`, `s_gender`, `dob`, `s_ssc`, 
   `ssc_seatno`, `s_hsc`, `hsc_seatno`, `graduation_pr`, `graduation_p_year`, `cmat`, `email`) VALUES ('$s_course
   ', '$g_course', '$s_name','$s_address' ,'$s_contact', '$p_contact','$s_gender','$dob', '$s_ssc', '$ssc_seatno','$s_hsc','$hsc_seatno', 
   '$graduation_pr','$graduation_p_year','$cmat','$email' )";
    
    
            $sqli = mysqli_query($conn, $sql);
        
    
            if ($sqli)  {
                
                echo "success";
            } 
            else {
    
            echo "fail";
            }
     }
     
    mysqli_close($conn);
    
?>
   