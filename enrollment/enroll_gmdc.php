<?php

if (isset($_POST['enrollnow3'])) {

    $id = $_POST['id'];//2
    echo $id;
    echo"<br>";
    $enroll = $_POST['enroll'];

//    $id2=--$id;
//    echo $id2;
//    echo"<br>";
//    $enroll = $_POST['enroll'];
//     echo $enroll."en1";
//     $id3=$id2++;
//     $id2=$_POST['id'];//2
//     echo $id3;
//     echo"<br/>";
//     $enroll++;
//     $enroll = $_POST['enroll'];
//     echo $enroll."ok";

$conn = mysqli_connect("localhost", "root", "", "gmgc");
$preen="SELECT * FROM `diplo_inquiry` ORDER BY enrollment desc limit 1";
    $sql = mysqli_query($conn, $preen);
  while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    echo $id;

    echo"<br>";

    $enroll = $row['enrollment'];
    echo $enroll;

    $enroll++;
    echo"<br>";
    echo $enroll;
    $id++;
    echo"<br>";
    echo $id;
    echo"<br>";

    // $conn = mysqli_connect("localhost", "root", "", "gmgc");
    $query = "UPDATE `diplo_inquiry` SET `enrollment`='$enroll' WHERE id='$id' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            // window.location = "../trans_form/gmit_adm_conf.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('unSuccessfully');
            // window.location = "./admission_Form.php";
        </script>
<?php
    }

    
}
// $preen="SELECT * FROM `be_inquiry` ORDER BY enrollment desc limit 1";
// echo $enroll;
    // $query = "UPDATE `be_inquiry` SET `enrollment`='$enroll' WHERE id='$id'";
    // $result = mysqli_query($conn, $preen);
    
    // echo $preen;
    if ($sql) {
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