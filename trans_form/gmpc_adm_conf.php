<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="admissionconfirm.css">
    <title>Admission Process</title>
</head>

<body style="background-color: lightgray;">
    <div class="container-fluid">
        <div class="text-center">
            <div class="row1" style="margin-top: 25px;">
                <img class="img img-responsive" src="../Bootstrap/admissionform/logo12.png" style="width: 8%; ">
                <img class="img img-responsive" src="../Bootstrap/admissionform/logoname.png" style="width:35%;">
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                <h1> GMGC Admission Online Fees Payment (BATCH:2022)</h1>
            </div>
        </div> <br> <br>
        <div class="row" style="background:white; border-radius:10px; margin-left:20px; margin-right:20px;">
            <div class="text-center">
                <div class="col1"
                    style="background: darkblue; color: white; font-size:20px; display: inline-block; padding:8px; margin-top:8px ;">
                    ONLINE ADMISSION FEES PAYMENT
                </div>
            </div>
            <div class="">
                <p style="margin: 0 0 0px; font-size: 18px;"> Dear Students,</p>
                <p style="margin: 0 0 0px; font-size:18px;">Your Online Admission Form is filled sucessfully.Now please
                    read the
                    guideline and contact provided phone number here after for any query.</p>

            </div>
            <div class="text-center" style="margin-top: 10px;">
                <div class="col2" style="background:darkblue; display:inline-block; color:white; padding: 8px;">
                    GUIDELINES
                </div>
            </div>
            <div class="col3" style="margin-left:0;  padding-left: 0px;">
                <ul>
                    <li style="color:red; font-weight: bold; ">Online Registration is done.</li>
                    <li>Do payment of token amount via QR code given below</li>
                    <li>Admission confirmation as per Eligibility criteria</li>
                </ul>
            </div>
        </div>
        <div class="row" style="background:white; border-radius:10px; margin:20px;">
            <div class="text-center">
                <div class="col5"
                    style="background:darkblue; color:white; display:inline-block; margin-top: 10px; margin-bottom: 10px; border-radius: 15px; font-size: 18px; padding: 6px;">
                    Fees Structure of Batch 2022-23
                </div>
            </div>
        </div>
        <div class="row" style="background:white; border-radius:10px; margin:20px;">
            <div class="text-center">
                <div class="col1"
                    style="background: darkblue; color: white; font-size:18px; display: inline-block; padding:8px; margin-top:8px ;">
                    Scan This QR Code for Token Fees Payment
                </div>
                <div class="div">
                    <div class="text-center">
                        <img class="img img-responsive" src="../Bootstrap/admissionform/onlineqr.jpeg" style="width:40%;">
                    </div>
                </div>
            </div>
        </div>
<?php
$con = mysqli_connect("localhost", "root","", "gmgc");
if ($con) {
//   echo "Connecting1";
} else {
  echo "error";
}
$q = "SELECT * FROM `bpharm_inquiry` WHERE email='yash@gmail.com'";
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $id = $row['id'];
    // echo $id;
    $int_name=$row['s_course'];
    $br=$row['s_branch'];
  $email = $row['email'];
//   $password = $row['password'];
  
}

?>
        <form action="../transaction_edit/gmpc_edit.php" method="post">
        <div class="row" style="background:white; border-radius:10px; margin:20px; ">
    <div class="text-center">

        <div class="class" style="font-size: 22px; color: #1c508c; font-weight: bold; margin-bottom:0;">
            Your Admission is under process.

        </div>
    </div>
    <div class="text-center">

        <div class="class" style="font-size: 22px; color: #1c508c; font-weight: bold; margin-top:0;">
            Please verify the below details.
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            &nbsp;
        </div>
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <div class="col-8" style="margin-top: 15px; ">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="email" style="float:left; font-size:19px; font-weight:bolder;">Email-Id:</label>
                    </div>

                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <div class="col-md-8">
                        <span style="display:block; overflow:hidden;">
                            <input type="email" class="form-control" placeholder="Enter Your email" name="email"
                                style="border-color: black; width: 70%;" value="<?php echo $email; ?>">
                    </div>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-4">
            &nbsp;
        </div>
        <div class="col-8" style="margin-top: 15px;">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="institute" style="float:left; font-size:19px; font-weight:bolder;">
                           Institute:</label>
                    </div>


                    <div class="col-md-8">
                        <span style="display:block; overflow:hidden;">
                            <input type="text" class="form-control" placeholder="Institute Name" name="college"
                                style="border-color: black; width: 70%;" value="<?php echo $int_name; ?>" readonly>
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            &nbsp;
        </div>
        <div class="col-8" style="margin-top: 15px;">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="branch" style="float:left; font-size:19px; font-weight:bolder;">
                            Branch:</label>
                    </div>


                    <div class="col-md-8">
                        <span style="display:block; overflow:hidden;">
                            <input type="text" class="form-control" placeholder="Branch Name" name="branch"
                                style="border-color: black; width: 70%; " value="<?php echo $br; ?>">
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            &nbsp;
        </div>
        <div class="col-8" style="margin-top: 15px;">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="transaction" style="float:left; font-size:19px; font-weight:bolder;">Transaction-Id:</label>
                    </div>
                        <div class="col-md-8">
                        <span style="display:block; overflow:hidden;">
                            <input type="text" class="form-control" placeholder="Transaction-Id" name="trans_id"
                                style="border-color: black; width: 70%; ">
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div> 
    <div class="row" style="margin-top:20px;">
        <div class="col">
            <div class="text-center" style="margin-bottom: 10px;">
                <button id="submit" type="submit" name="trans4" class="btn btn-danger">SUBMIT</button>
            </div>
        </div>
    </div>

</div>
        <div class="row" style="background:white; border-radius:10px; margin:20px;">
            <div class="text-center">
                <div class="col1"
                    style="background: darkblue; color: white; font-size:20px; display: inline-block; padding:8px; margin-top:8px ;">
                    Contact Details For Inquiry
                </div>
            </div>
            <div class="row1" style="margin-top: 15px; margin-bottom:25px;">
                <div class="table-responsive">
                    <table class="table table-bordered " style="border: 2px solid rgb(154, 145, 145);">
                        <thead>
                            <tr style="text-align: center; font-size: 18px; font-style:inherit;">
                                <th scope="col">Name of the Institute/faculty</th>
                                <th scope="col">Programme Offered</th>
                                <th scope="col"> Helpline-1</th>
                                <th scope="col">Helpline-2</th>
                                <th scope="col">Email Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center; background-color:rgb(232, 231, 231); font-size: 18px;">
                                <td>Mr. Kamlesh Patel</td>
                                <td>GMGC Courses</td>
                                <td>9106954752</td>
                                <td>-</td>
                                <td>krpatel@gmit.edu.in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>