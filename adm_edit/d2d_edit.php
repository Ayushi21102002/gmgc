<?php

if (isset($_POST['pay2'])) {

    $id = $_POST['id'];
    echo $id;
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
    $diplo_insti_name = $_POST['din'];
     $diplo_branch_name = $_POST['dbn'];
     $diplo_p_year = $_POST['dpy'];
     $diplo_seatno = $_POST['dno'];
    $diplo_cgpa = $_POST['dper'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    echo $password;
    // $trans_id = $_POST['trans_id'];
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `d2d_inquiry` SET `s_branch`=' $s_branch',`s_name`='$s_name',`s_address`='$s_address',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno', `diplo_insti_name`='$diplo_insti_name',`diplo_branch_name`=' $diplo_branch_name',`diplo_p_year`=' $diplo_p_year',
    `diplo_seatno`='$diplo_seatno',`diplo_cgpa`='$diplo_cgpa',`email`='$email',`password`='$password ',`transaction_id`='0' WHERE id='$id' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/d2d_adm_conf.php";
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