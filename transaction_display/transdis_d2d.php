<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../Bootstrap/CSS/admissionconfirm.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>Admission Process</title>
</head>

<body>
    <div class="container-fluid">



        <div class="container-fluid">
            <div class="text-center">
                <div class="row1" style="margin-top: 25px;">
                    <img class="img img-responsive" src="../Bootstrap/admissionform/logo12.png" style="width: 8%; ">
                    <img class="img img-responsive" src="../Bootstrap/admissionform/logoname.png" style="width:35%;">
                </div>
            </div>

            <div class="row" style="background:white; border-radius:10px; margin-left:20px; margin-right:20px; margin-top: 20px;">
            <?php
$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
//   echo "Connecting1";
} else {
  echo "error";
}
$q = "SELECT * FROM `d2d_inquiry` WHERE email='abchbhnjh@gmail.com'";
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $id = $row['id'];
    // echo $id;
    $int_name=$row['s_course'];
    $br=$row['s_branch'];
  $email = $row['email'];
  $trans_id = $row['transaction_id'];

//   $password = $row['password'];
  
}

?>



                <div class="row">
                    <div class="col-3">
                        &nbsp;
                    </div>
                    <div class="col-8" style="margin-top: 15px; ">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name" style="float:left; font-size:20px; font-weight:bolder;"> Email-id
                                        :</label>
                                </div>

                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <div class="col-md-9">
                                    <span style="display:block; overflow:hidden;">
                                        <input type="email" class="form-control" placeholder="Enter Your email"value="<?php echo $email;?>"
                                            style="border-color: black; width: 70%;">
                                </div>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
               

                <div class="row">
                    <div class="col-3">
                        &nbsp;
                    </div>
                    <div class="col-8" style="margin-top: 15px;">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="institute" style="float:left; font-size:20px; font-weight:bolder;">
                                        Institute :</label>
                                </div>


                                <div class="col-md-9">
                                    <span style="display:block; overflow:hidden;">
                                        <input type="text" class="form-control" placeholder="Institute Name"
                                            name="Institute" style="border-color: black; width: 70%;" value="<?php echo $int_name; ?>" readonly>
                                </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        &nbsp;
                    </div>
                    <div class="col-8" style="margin-top: 15px;">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="branch" style="float:left; font-size:20px; font-weight:bolder;">
                                        Branch:</label>
                                </div>


                                <div class="col-md-9">
                                    <span style="display:block; overflow:hidden;">
                                        <input type="text" class="form-control" placeholder="Branch Name" name="branch"
                                            style="border-color: black; width: 70%;"value="<?php echo $br; ?>">
                                </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        &nbsp;
                    </div>
                    <div class="col-8" style="margin-top: 15px;">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="transaction" style="float:left; font-size:20px; font-weight:bolder;">
                                        Transaction-Id:</label>
                                </div>


                                <div class="col-md-9">
                                    <span style="display:block; overflow:hidden;">
                                        <input type="text" class="form-control" placeholder="Transaction-Id"
                                            name="category" style="border-color: black; width: 70%;" value="<?php echo $trans_id; ?>">
                                </div>
                                </span>
                            </div>
                        </div>
                    </div>

                </div> 
                <div class="row" style="margin-top:10px;">
                    <center>
                        <p style="font-size: 20px; font-weight: bold; color: #1C508c;">Your admission is under
                            process,login through this link <a href="../student_login/login_d2d.php"
                                style="color: red;">Login</a> to continue the admission process.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>

</html>