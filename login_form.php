<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visitor</title>
    <link rel="stylesheet" href="./Bootstrap/admissionform/style.css">
    <title>login</title>
</head>
<body>
    <div class="login_form">
        <h1 class="heading">Login</h1>
        <?php
$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  echo "Connecting1";
} else {
  echo "error";
}
$q = "SELECT * FROM `be_inquiry` WHERE email='abc@gmail.com'";
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    echo $id;
    echo"<br>";
    $enroll = $row['enrollment'];
    echo $enroll;
}

?>

        <form action="./enrollment/enroll_gmit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <p>Email</p>
            <input type="text" name="email" placeholder="Name"required>
            <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="enroll" value="<?php echo $enroll; ?>">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Name" required>
            <br>

            <button type="submit" name="enrollnow1">Sign in</button>
        </form>
    </div>


</body>
</html>