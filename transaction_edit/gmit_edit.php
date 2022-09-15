<?php

if (isset($_POST['trans1'])) {

    $email = $_POST['email'];
    // echo $id;
    $trans_id = $_POST['trans_id'];
    echo $trans_id;
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `be_inquiry` SET `transaction_id`='$trans_id' WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../paymentdisplay.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('unSuccessfully');
            // window.location = "./logout.php";
        </script>
<?php
    }
}
// }
// }
mysqli_close($conn);
?>