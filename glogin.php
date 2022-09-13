
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="./Bootstrap/admissionform/bootlogin.css">
    <title>Login Form</title>
</head>

<body style="background-color: lightgrey;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"> 

            </div>
            <form action="login.php" method="post">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div id="log" style="background-color: white; width: 100%;" >
                    <div class="text-center">
                    <h2>Login form</h2>
                    </div> <br> 
                    <!-- <form action="enroll_ex.php" method="post"> -->
<?php
 $con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
//   echo "Connecting1";
} else {
  echo "error";
}
$q = "SELECT * FROM `be_inquiry` WHERE email='ayushi@gmail.com'";
         
        

$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    echo $id;
  $email = $row['email'];
  $password = $row['password'];
  
}

?>

                    <div class="form-group" > 
                        <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px;">Select Type:</label>
                        <span style="display:block; overflow:hidden;">
                            <select class="form-control" name="gn" id="gn" required>
                                <option value="">-- Select type  --</option>
                                <option value="hod">HOD</option>
                                <option value="bac">Branch Admission Co-ordinator</option>
                                <option value="mac">Main Admission Co-ordinator</option>
                                <option value="student">Student</option>
                            </select>
                        </span>
                    </div> <br>
                    <?php if(isset($_SESSION['email']))?>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                    <div class="form-group" > 
                        <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px;">Email-Id:</label>
                        <span style="display:block; overflow:hidden;">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
                        </span>
                    </div> <br>

                    <input type="text" name="pass" value="<?php echo $password; ?>">
                    <div class="form-group">
                        <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px;">Password:</label>
                        <span style="display:block; overflow:hidden;">
                        <input type="password" class="form-control" name="pass" placeholder="Enter your password" value="<?php echo $password; ?>" maxlength="8">
                        </span>
                    </div>
                     
                        <div>
                           <button id="submit" type="submit" name="login" class="btn btn-success btn-block">Login</button>
                           <!-- <a href="./enroll_ex.php" class="nav-link"> -->

                        </div>
                </form>
                </form>



            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"> </div>
        </div>
    </div>
</body>

</html>