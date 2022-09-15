<?php

if (isset($_POST['pay6'])) {

    // $id = $_POST['id'];
    // echo $id;
    // $s_course = $_POST['s_course'];
    $s_course = $_POST['br'];
    $s_name = $_POST['st'];
    $s_address = $_POST['sa'];
    $s_contact = $_POST['wp'];
    $p_contact= $_POST['alt'];
    $s_gender = $_POST['gn'];
    $dob = $_POST['dob'];
    $s_ssc = $_POST['sscp'];
    $ssc_seatno = $_POST['ssno'];
    $s_hsc = $_POST['hscp'];
    $hsc_seatno = $_POST['hsno'];   
    $graduation_pr = $_POST['gp'];
    $graduation_p_year = $_POST['gpy'];
    $cmat = $_POST['cmat'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // echo $password;
    // $trans_id = $_POST['trans_id'];
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `mca_inquiry` SET `g_course`='$s_course',`s_name`='$s_name',`s_address`='$s_address',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno',`s_hsc`='$s_hsc',`hsc_seatno`='$hsc_seatno',`graduation_pr`=' $graduation_pr',
    `graduation_p_year`='$graduation_p_year',`cmat`='$cmat',`email`='$email',`password`='$password',`transaction_id`='0' WHERE email='$email' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/gmcc_adm_conf.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('unSuccessfully');
            window.location = "./admission_Form.php";
        </script>
<?php
    }
}
// }
// }
mysqli_close($conn);
?>