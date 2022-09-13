<?php

if (isset($_POST['trans4'])) {

    $id = $_POST['id'];
    echo $id;
    $trans_id = $_POST['trans_id'];
    echo $trans_id;
    
    $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `bpharm_inquiry` SET `transaction_id`='$trans_id' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            // window.location = "./admission_Form.php";
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