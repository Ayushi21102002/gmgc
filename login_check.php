<?php

if (isset($_POST['login'])) {

    $id = $_POST['id'];
    // echo $id;

$email = $_POST['email'];
$password = $_POST['pass'];
    // $trans_id = $_POST['trans_id'];
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `d2d_inquiry` SET `s_branch`=' $s_branch',`s_name`='$s_name',`s_address`='$s_add',
    `s_contact`='$s_contact',`p_contact`='$p_contact',`s_gender`='$s_gender',`dob`='$dob',`s_ssc`='$s_ssc',
    `ssc_seatno`='$ssc_seatno', `diplo_insti_name`='$diplo_insti_name',`diplo_branch_name`=' $diplo_branch_name',`diplo_p_year`=' $diplo_p_year',`diplo_seatno`='$diplo_seatno',
    `diplo_cgpa`='$diplo_cgpa',`email`='$email',`password`='$password ',`transaction_id`='0' WHERE id='$id' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "./admissionconfirm.php";
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