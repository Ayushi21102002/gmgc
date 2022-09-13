<?php

if (isset($_POST['pay1'])) {

    $id = $_POST['id'];
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
    $s_gujcet = $_POST['guc'];
    $s_jee = $_POST['jec'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // $trans_id = $_POST['trans_id'];
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `be_inquiry` SET `s_branch`='$s_branch',`s_name`='$s_name',`s_address`='$s_address',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno',`s_hsc`='$s_hsc',`hsc_seatno`='$hsc_seatno',`hsc_p_year`='$hsc_p_year',`s_gujcet`='$s_gujcet',
    `s_jee`='$s_jee',`email`='$email',`password`='$password',`transaction_id`='0' WHERE id='$id' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/gmit_adm_conf.php";
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