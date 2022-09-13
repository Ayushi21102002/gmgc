<?php
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
       $s_ssc = $_POST['s_ssc'];
       $ssc_seatno = $_POST['ssc_seatno'];
       $s_hsc = $_POST['s_hsc'];
       $hsc_seatno = $_POST['hsc_seatno'];
       $hsc_p_year= $_POST['hsc_p_year'];
       $s_gujcet = $_POST['s_gujcet'];
       $s_jee = $_POST['s_jee'];
       $email = $_POST['email'];

$sql = "INSERT INTO`be_inquiry`(`s_course`,`s_branch`,`s_name`,`s_address`,`s_contact`,`p_contact`,`s_gender`,`dob`, 
`s_ssc`,`ssc_seatno`,`s_hsc`,`hsc_seatno`,`hsc_p_year`,`s_gujcet`,`s_jee`,`email`) VALUES ('$s_course','$s_branch',
'$s_name','$s_address','$s_contact','$p_contact','$s_gender','$dob','$s_ssc','$ssc_seatno','$s_hsc','$hsc_seatno',
'$hsc_p_year','$s_gujcet','$s_jee','$email')";

            $result1 = mysqli_query($conn, $sql);
            echo $result1;
            if($result1)  {
                echo "success";
            } 
            else {
            echo "fail";
            }
     }
    mysqli_close($conn);
    
?>