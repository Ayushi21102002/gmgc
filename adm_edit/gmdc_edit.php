<?php

if (isset($_POST['pay3'])) {

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
    $ssc_p_year = $_POST['hscy'];
    $email = $_POST['email'];
    $password = $_POST['pass'];


    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `diplo_inquiry` SET `s_branch`='$s_branch',`s_name`='$s_name',`s_address`='$s_address',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno',`ssc_p_year`='$ssc_p_year',`email`='$email',`password`='$password',`transaction_id`='0' WHERE id='$id' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/gmdc_adm_conf.php";
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