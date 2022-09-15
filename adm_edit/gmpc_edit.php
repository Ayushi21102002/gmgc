<?php

if (isset($_POST['pay4'])) {

    // $id = $_POST['id'];
    // echo $id;
    // $s_course = $_POST['s_course'];
    $s_branch = $_POST['br'];
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
    $hsc_p_year= $_POST['hscy'];
     $dpharm_p_year = $_POST['dpharm'];
       $dpharm_mark = $_POST['dpharm1'];
       $dpharm_seatno = $_POST['dpharm2'];
       $s_gujcet = $_POST['guc'];
    $s_neet = $_POST['neetscore'];
    $s_group = $_POST['grp'];
    $email = $_POST['email'];
       $password = $_POST['pass'];
    // $trans_id = $_POST['trans_id'];
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `bpharm_inquiry` SET `s_branch`='$s_branch',`s_name`='$s_name',`s_address`=' $s_address',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno',`s_hsc`='$s_hsc',`hsc_seatno`='$hsc_seatno',`hsc_p_year`='$hsc_p_year',`dpharm_p_year`='$dpharm_p_year',
    `dpharm_mark`='$dpharm_mark',`dpharm_seatno`='$dpharm_seatno',`s_gujcet`='$s_gujcet',`s_neet`='$s_neet',`s_group`='$s_group',
    `email`='$email',`password`='$password',`transaction_id`='0' WHERE email='$email' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/gmpc_adm_conf.php";
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