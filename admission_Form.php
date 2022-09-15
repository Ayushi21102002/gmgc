<head>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#my_select").change(function() {
          $(this).find("option:selected").each(function() {
            var optionValue = $(this).attr("value");
            if (optionValue) {
              $(".box").not("." + optionValue).hide();
              $("." + optionValue).show();
            } else {
              $(".box").hide();
            }
          });
        }).change();
      });
 </script>
</head>

<body>
  <div>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GMIT | Bhavnagar</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="./admissionform/logo12.png" type="image/x-icon">

        <!-- Font awesome -->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="./Bootstrap/admissionform/admissionform.css">
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



        <section id="mu-page-breadcrumb" style="background-color:#e1e1e1;padding: 10px;height: auto;">
          <div class="container" style="width: 100%;">
            <div class="row">

              <div class="col-md-12" align="center">
                <!-- <div class="logo-size" align="center"> -->
                  <div class="col-md-2 col-sm-12 col-xs-12" style="text-align: center; margin-top: 15px; margin-left: 50px;">
                    <img src="./Bootstrap/admissionform/logo12.png" style="width: auto;">

                  </div>
                <div class="col-md-8 col-sm-12 col-xs-12" style="text-align: center; margin-left: 30px;">
                    <img src="./Bootstrap/admissionform/logoname.png" style="width: 100%;">
                </div>
                  <h2 class="headding5">GMGC Admission Application Form (BATCH : 2022)</h2>
                </div>

              </div>
            </div>
            
            <div class="left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left:15px; text-align:left;">
              <div class="row">
                <div class="col-md-1">
                  &nbsp;
                </div>
                <div class="col-md-2" id="A">
                  <h4><b>Select Your Institute</b></h4>
                </div>
                
                <div class="col-md-6">
                  
                  <select id="my_select" class="form-control">
                    <option>Select Institute</option>
                    <option value="gmit">Gyanmanjari Institute of Technology (GMIT) - 1st Year Degree Engineering</option>
                    <option value="gmitd2d">Gyanmanjari Institute of Technology (GMIT) - Diploma To Degree (D2D) Engineerin</option>
                    <option value="gmdc">Gyanmanjari Diploma Engineering College (GMDC)</option>
                    <option value="gmpc">Gyanmanjari Pharmacy College (GMPC)</option>
                    <option value="gmsc">Gyanmanjari Science College (GMSC)</option>
                    <option value="gmcc">Gyanmanjari College of Computer Application (GMCC)</option>
                    <option value="gmpgc">Gyanmanjari PG Center (GMPGC)</option>
                  </select>

                </div>
              </div>
            </div>

            <?php
echo"hello";
// if (isset($_POST['submit1'])) {
//   echo"hiii";
//  $email = $_POST['email'];

$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  echo "Connecting1";
<<<<<<< HEAD
$q = "SELECT * FROM `be_inquiry` WHERE email='ayu12@gmail.com'";
=======
$q = "SELECT * FROM `be_inquiry` WHERE email='ayushi@gmail.com'";
>>>>>>> ff0e5e92c2e5eac576d682e83c728c836a161666
// echo $email;
// echo $q;
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
<<<<<<< HEAD
    // echo"mansi";
=======
    echo"mansi";
>>>>>>> ff0e5e92c2e5eac576d682e83c728c836a161666
    // $id = $row['id'];
    $s_name = $row['s_name'];
    $s_address = $row['s_address'];
  $s_contact = $row['s_contact'];
  $p_contact = $row['p_contact'];
  $s_gender = $row['s_gender'];
  $dob = $row['dob'];
  $s_ssc = $row['s_ssc'];
  $ssc_seatno = $row['ssc_seatno'];
  $s_hsc = $row['s_hsc'];
  $hsc_seatno =$row['hsc_seatno'];
  $hsc_p_year = $row['hsc_p_year'];
  $s_gujcet = $row['s_gujcet'];
  $s_jee= $row['s_jee'];
  $email = $row['email'];
  $password = $row['password'];
  // $trans_id = $row['transaction_id'];
  // echo"khushi";
}}
// echo $name;
?>

            <div class="gmit box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: none;">
              <label style="color:red;">Note: Token fees for the selected course is 10,000 ₹</label>
              <!-- <form action="gmit_insert.php" method="post"> -->
              <form action="./adm_edit/gmit_edit.php" method="post">
              <input type="hidden" name="email"value="<?php echo $email; ?>">
                <div class="form-group">
                  <label for="br">Select Branch</label>
                  <select class="form-control" name="br" id="br" required="">
                    <option value="">-- Select Branch --</option>
                    <option value="ce">Computer Engineering</option>
                    <option value="it">Information Technology</option>
                    <option value="me">Mechanical Engineering</option>
                    <option value="ci">Civil Engineering</option>
                    <option value="el">Electrical Engineering</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="st">Student Full Name</label>
                      <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per SSC/HSC Marksheet" value="<?php echo $s_name; ?>" required="">
                      <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="st">Student Address</label>
                      <input type="text" class="form-control" name="sa" id="st" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo  $s_address; ?>" required="">
                      <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="acont">Student Contact Number</label>
                      <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>" required="">
                      <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cont">Parent Contact Number</label>
                      <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                      <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gn">Gender</label>
                      <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                        <option value="">-- Select Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Trans Gender">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dob">Date Of Birth</label>
                      <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                      <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shdp">SSC Percentage </label>
                      <input type="text" class="form-control" name="sscp" id="shdp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo  $s_ssc; ?>" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shdno">SSC Seat No</label>
                      <input type="text" class="form-control" name="ssno" id="shdno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo  $ssc_seatno; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shdp">HSC Percentage </label>
                      <input type="text" class="form-control" name="hscp" id="shdp" aria-describedby="helpId" placeholder="HSC Percentage" value="<?php echo  $s_hsc; ?>" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shdno">HSC Seat No</label>
                      <input type="text" class="form-control" name="hsno" id="shdno" aria-describedby="helpId" placeholder="HSC Seat No" value="<?php echo  $hsc_seatno; ?>" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nsc">HSC Passing Year</label>
                      <input type="text" class="form-control" name="hscy" id="nsc" aria-describedby="helpId" placeholder="HSC Passing Year" value="<?php echo $hsc_p_year; ?>" required="">
                      <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gsc">GUJCET Score (If Available)</label>
                      <input type="text" class="form-control" name="guc" id="gsc" aria-describedby="helpId" placeholder="GUJCET Score (If Available)" value="<?php echo  $s_gujcet; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jsc">JEE Score (If Available)</label>
                      <input type="text" class="form-control" name="jec" id="jsc" aria-describedby="helpId" placeholder="JEE Score (If Available)" value="<?php echo $s_jee;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jsc">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter Your Email Address" value="<?php echo $email; ?>">
                    </div>
                  </div>
<<<<<<< HEAD
                  <input type="hidden" name="email" value="<?php echo $email; ?>">
=======
                  
>>>>>>> ff0e5e92c2e5eac576d682e83c728c836a161666
                  <div class="row" style="margin: 0 2px 0 3px ;">
                    <div class="col-md-6">
                      <div class="form-group">
                      <input type="hidden" name="email" value="<?php echo $email; ?>">
                          <label for="passwd">Password</label>
                          <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" >
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="jsc">
                        <input type="checkbox" required="">
                        Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                    </div>
                  </div>
                </div>

                       
        <div>
        <!-- <form action="./adm_edit.php" method="post"> -->
          <button id="submit" type="submit" name="pay1" class="btn btn-primary">Go For Payment</button>
          <!-- </form>  -->
        </div>
        </form>
</div>
</div>
<?php
   ?>


<?php
$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  echo "Connecting2";
} else {
  echo "error";
}
$q = "SELECT * FROM `d2d_inquiry` WHERE email='abchbhnjh@gmail.com'";
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $sel_cour = $row['s_course'];
    // $id = $row['id'];
        $sel_branch=$row['s_branch'];
        $name = $row['s_name'];
        $s_address = $row['s_address'];
        $s_contact=$row['s_contact'];
        $p_contact=$row['p_contact'];
        $s_gender=$row['s_gender'];
        $dob=$row['dob'];
        $s_ssc = $row['s_ssc'];
        $ssc_seatno = $row['ssc_seatno'];
        $diplo_insti_name=$row['diplo_insti_name'];
        $diplo_branch_name=$row['diplo_branch_name'];
        $diplo_p_year=$row['diplo_p_year'];
        $diplo_seatno=$row['diplo_seatno'];
        $diplo_cgpa=$row['diplo_cgpa'];
        $email=$row['email'];
        $password=$row['password'];
       
}
?>

          <div class="gmitd2d box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
            <label style="color:red;">Note: Token fees for the selected course is 10,000 ₹</label>
            <form action="./adm_edit/d2d_edit.php" method="post">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Select Branch</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Branch --</option>
                  <option value="ce">Computer Engineering</option>
                  <option value="it">Information Technology</option>
                  <option value="me">Mechanical Engineering</option>
                  <option value="ci">Civil Engineering</option>
                  <option value="el">Electrical Engineering</option>
                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per SSC/HSC Marksheet" value="<?php echo  $name; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="st" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo  $s_address; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info"  value="<?php echo $s_contact; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdp">SSC Percentage </label>
                    <input type="text" class="form-control" name="sscp" id="shdp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo $s_ssc; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdno">SSC Seat No</label>
                    <input type="text" class="form-control" name="ssno" id="shdno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo $ssc_seatno; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nsc">Diploma Institute Name</label>
                    <input type="text" class="form-control" name="din" id="nsc" aria-describedby="helpId" placeholder="Dilpoma Institute Name" value="<?php echo  $diplo_insti_name; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">Ex. 2022</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gsc">Diploma Branch Name</label>
                    <input type="text" class="form-control" name="dbn" id="gsc" aria-describedby="helpId" placeholder="Diploma Branch Name" value="<?php echo  $diplo_branch_name; ?>" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nsc">Diploma Passing Year</label>
                    <input type="text" class="form-control" name="dpy" id="nsc" aria-describedby="helpId" placeholder="Diploma Passing Year" value="<?php echo $diplo_p_year; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gsc">Diploma Eno.Number/PNR/Seat Number</label>
                    <input type="text" class="form-control" name="dno" id="gsc" aria-describedby="helpId" placeholder="Diploma Eno.Number" value="<?php echo $diplo_seatno; ?>" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Diploma CGPA/Percentage</label>
                    <input type="text" class="form-control" name="dper" id="jsc" aria-describedby="helpId" placeholder="Diploma CGPA/Percentage" value="<?php echo $diplo_cgpa; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" placeholder="Enter Your Email Address" value="<?php echo $email; ?>">
                  </div>
                </div>
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <div class="row" style="margin: 0 2px 0 3px;">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="passwd">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="jsc">
                      <input type="checkbox" required="">
                      Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                  </div>
                </div>


              </div>
     
        <div>
          <button id="submit" type="submit"name="pay2" class="btn btn-primary">Go For Payment</button>
      </div>
    
            </form>
          </div>

 <?php
$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  // echo "Connecting3";
} else {
  echo "error";
}
$q = "SELECT * FROM `diplo_inquiry` WHERE email='abchbhnjnjiih@gmail.com'";
$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $sel_cour = $row['s_course'];
    // $id = $row['id'];
    $sel_branch=$row['s_branch'];
    $s_name = $row['s_name'];
    $s_address = $row['s_address'];
    $s_contact=$row['s_contact'];
      $p_contact=$row['p_contact'];
      $s_gender=$row['s_gender'];
      $dob=$row['dob'];
      $s_ssc = $row['s_ssc'];
      $ssc_seatno = $row['ssc_seatno'];
      $ssc_p_year = $row['ssc_p_year'];
      $email= $row['email'];
     $password=$row['password'];
       
}
?>
          <div class="gmdc box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 29px; width: 96%; color: black; text-align: left; display: none;">
            <label style="color:red;">Note: Token fees for the selected course is 5,000 ₹</label>
            <form action="./adm_edit/gmdc_edit.php" method="post">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Select Branch</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Branch --</option>
                  <option value="ce">Computer Engineering</option>
                  <option value="it">Information Technology</option>
                  <option value="me">Mechanical Engineering</option>
                  <option value="ci">Civil Engineering</option>
                  <option value="el">Electrical Engineering</option>
                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per SSC Marksheet" value="<?php echo$s_name; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="st" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo $s_address; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdp">SSC Percentage </label>
                    <input type="text" class="form-control" name="sscp" id="shdp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo $s_ssc; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdno">SSC Seat No</label>
                    <input type="text" class="form-control" name="ssno" id="shdno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo $ssc_seatno; ?>" required="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nsc">SSC Passing Year</label>
                    <input type="text" class="form-control" name="hscy" id="nsc" aria-describedby="helpId" placeholder="SSC Passing Year" value="<?php echo $ssc_p_year; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" placeholder="Enter Your Email Address" value="<?php echo $email; ?>">
                  </div>
                </div>
                </div>
              <input type="hidden" name="email" value="<?php echo $email; ?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="passwd">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
                    </div>
                  </div>
                  
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="jsc">
                      <input type="checkbox" required="">
                      Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                  </div>
                </div>
            

                  
        <div>
          <button id="submit" type="submit"name="pay3"class="btn btn-primary">Go For Payment</button>
      </div>

    
            </form>
          </div>
<?php

$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  // echo "Connecting4";
} else {
  echo "error";
}
$q = "SELECT * FROM `bpharm_inquiry` WHERE email='yash@gmail.com'";

$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $sel_cour = $row['s_course'];
    // $id = $row['id'];
    $sel_branch=$row['s_branch'];
      $sname=$row['s_name'];
      $s_add=$row['s_address'];
      $s_contact=$row['s_contact'];
      $p_contact=$row['p_contact'];
      $s_gender=$row['s_gender'];
      $dob=$row['dob'];
      $sscp = $row['s_ssc'];
      $sscseat = $row['ssc_seatno'];
      $hscp = $row['s_hsc'];
      $hscseat =$row['hsc_seatno'];
      $hscyear = $row['hsc_p_year'];
      $dpharmy=$row['dpharm_p_year'];
      $dpharmmark=$row['dpharm_mark'];
      $dpharmseat=$row['dpharm_seatno'];
      $guj_score = $row['s_gujcet'];
      $neetscore = $row['s_neet'];
      $sgrp = $row['s_group'];
      $email=$row['email'];
        $password=$row['password'];
      
      }
?>



          <div class="gmpc box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 29px; width: 96%; color: black; text-align: left; display: none;">
            <label style="color:red;">Note: Token fees for the selected course is 10,000 ₹</label>
            <form action="./adm_edit/gmpc_edit.php" method="post">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Select Branch</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Branch --</option>
                  <option value="B.Pharm">B.Pharm</option>
                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per SSC/HSC Marksheet" value="<?php echo $sname; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sa">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="sa" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo $s_add; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>"required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sscp">SSC Percentage </label>
                    <input type="text" class="form-control" name="sscp" id="sscp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo $sscp; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ssno">SSC Seat No</label>
                    <input type="text" class="form-control" name="ssno" id="ssno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo $sscseat; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hscp">HSC Percentage </label>
                    <input type="text" class="form-control" name="hscp" id="hscp" aria-describedby="helpId" placeholder="HSC Percentage" value="<?php echo $hscp; ?>"required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hsno">HSC Seat No</label>
                    <input type="text" class="form-control" name="hsno" id="hsno" aria-describedby="helpId" placeholder="HSC Seat No" value="<?php echo $hscseat; ?>"required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hscy">HSC Passing Year</label>
                    <input type="text" class="form-control" name="hscy" id="hscy" aria-describedby="helpId" placeholder="HSC Passing Year" value="<?php echo $hscyear; ?>"required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dpharm">D.Pharm Passing Year (If Applicable)</label>
                    <input type="text" class="form-control" name="dpharm" id="dpharm" aria-describedby="helpId" placeholder="D.Pharm Passing Year (If Applicable)" value="<?php echo $dpharmy; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dpharm">D.Pharm Marks (If Applicable)</label>
                    <input type="text" class="form-control" name="dpharm1" id="dpharm" aria-describedby="helpId" placeholder="D.Pharm Passing Year (If Applicable)" value="<?php echo $dpharmmark; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dpharm">D.Pharm Seatno (If Applicable)</label>
                    <input type="text" class="form-control" name="dpharm2" id="dpharm" aria-describedby="helpId" placeholder="D.Pharm Passing Year (If Applicable)" value="<?php echo $dpharmseat; ?>">
                  </div>
                </div>
              </div>
                
                    

             
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guc">GUJCET Score (If Available)</label>
                    <input type="text" class="form-control" name="guc" id="guc" aria-describedby="helpId" placeholder="GUJCET Score (If Available)" value="<?php echo $guj_score; ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">NEET Score (If Available)</label>
                    <input type="text" class="form-control" name="neetscore" id="neetscore" aria-describedby="helpId" placeholder="NEET Score (If Available)" value="<?php echo $neetscore; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">12th Science Group</label>
                    <select class="form-control" name="grp" id="grp" required="" value="<?php echo $sgrp; ?>">
                      <option value="">-- Select Group --</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" placeholder="Enter Your Email Address" value="<?php echo $email; ?>">
                  </div>
                </div>
              </div>
              <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="passwd">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" value="<?php echo $password; ?>">
                  </div>
                </div>
             
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="jsc">
                    <input type="checkbox" required="">  Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                </div>
              </div>
              </div>

                   
              <div>
               <button id="submit" type="submit"name="pay4"class="btn btn-primary">Go For Payment</button>
              </div>

            </form>
          </div>


          <?php

$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  // echo "Connecting5";
} else {
  echo "error";
}
$q = "SELECT * FROM `bsc_inquiry` WHERE email='abchbhnjnjiih@gmail.com'";

$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $sel_cour = $row['s_course'];
    // $id = $row['id'];
    $sel_branch=$row['s_branch'];
      $sname=$row['s_name'];
      $s_add=$row['s_address'];
      $s_contact=$row['s_contact'];
      $p_contact=$row['p_contact'];
      $s_gender=$row['s_gender'];
      $dob=$row['dob'];
      $sscp = $row['s_ssc'];
      $sscseat = $row['ssc_seatno'];
      $hscp = $row['s_hsc'];
      $hscseat =$row['hsc_seatno'];
      $hscyear = $row['hsc_p_year'];
      $mkbu=$row['mkbu_form_no'];
      $sgrp = $row['science_group'];
      $email=$row['email'];
      $password=$row['password'];
      
      }
?>

          <div class="gmsc box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 29px; width: 96%; color: black; text-align: left; display: none;">
            <label style="color:red;">Note: Token fees for B.Sc. course is 5,000 ₹</label>
            <form action="./adm_edit/gmsc_edit.php" method="post">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Select Branch</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Branch --</option>
                  <option value="CPM">CPM (For A Group)</option>
                  <option value="MiCZ">MiCZ (For B Group)</option>
                  <option value="MiBZ">MiBZ (For B Group)</option>
                  <option value="CBZ">CBZ (For B Group)</option>
                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" name="st" class="form-control" aria-describedby="helpId" placeholder="Student Full Name as per SSC/HSC Marksheet" value="<?php echo $sname; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sa">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="sa" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo $s_add; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" required="" value="<?php echo $s_gender; ?>">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>"required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sscp">SSC Percentage </label>
                    <input type="text" class="form-control" name="sscp" id="sscp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo $sscp; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ssno">SSC Seat No</label>
                    <input type="text" class="form-control" name="ssno" id="ssno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo $sscseat; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hscp">HSC Percentage </label>
                    <input type="text" class="form-control" name="hscp" id="hscp" aria-describedby="helpId" placeholder="HSC Percentage" value="<?php echo $hscp; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hsno">HSC Seat No</label>
                    <input type="text" class="form-control" name="hsno" id="hsno" aria-describedby="helpId" placeholder="HSC Seat No" value="<?php echo $hscseat; ?>" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="hscy">HSC Passing Year</label>
                    <input type="text" class="form-control" name="hscy" id="hscy" aria-describedby="helpId" placeholder="HSC Passing Year" value="<?php echo $hscyear; ?>"required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nsc">M.K.B.U. Online Form No.</label>
                    <input type="text" class="form-control" name="mkbuformno" id="mkbuformno" aria-describedby="helpId" placeholder="M.K.B.U. Online Form No."  value="<?php echo $mkbu; ?>"required="">

                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">12th Science Group</label>
                    <select class="form-control" name="grp" id="grp" value="<?php echo $sgrp; ?>" required="">
                      <option value="">-- Select Group --</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" value="<?php echo $email; ?>" placeholder="Enter Your Email Address">
                  </div>
                </div>
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <div class="row" style="margin: 0 2px 0 3px;">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="passwd">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="jsc">
                      <input type="checkbox" required="">
                      Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                  </div>
                </div>
              </div>

                   
        <div>
          <button id="submit" type="submit"name="pay5"class="btn btn-primary">Go For Payment</button>
      </div>

            </form>
          </div>


      

<?php

$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  // echo "Connecting1";
} else {
  echo "error";
}
$q = "SELECT * FROM `mca_inquiry` WHERE email='123@gmail.com'";

$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $id = $row['id'];
  $name = $row['s_name'];
  $s_add = $row['s_address'];
  $s_contact = $row['s_contact'];
  $p_contact = $row['p_contact'];
  $s_gender = $row['s_gender'];
  $dob = $row['dob'];
  $sscp = $row['s_ssc'];
  $sscseat = $row['ssc_seatno'];
  $hscp = $row['s_hsc'];
  $hscseat =$row['hsc_seatno'];
  $gradp = $row['graduation_pr'];
  $grady = $row['graduation_p_year'];
  $cmat = $row['cmat'];
  $email = $row['email'];
  $password = $row['password'];
}
?>

          <div class="gmcc box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 29px; width: 96%; color: black; text-align: left; display: none;">
            <label style="color:red;">Note: Token fees for the selected course is 10,000 ₹</label>
            <form action="./adm_edit/gmcc_edit.php" method="post">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Graduation Course</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Course --</option>
                  <option value="bca">BCA</option>
                  <option value="bsc">Bsc-IT</option>
                  <option value="bcom">B.com</option>
                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per SSC/HSC Marksheet" value="<?php echo $name; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="st" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo $s_add; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdp">SSC Percentage </label>
                    <input type="text" class="form-control" name="sscp" id="shdp" aria-describedby="helpId" placeholder="SSC Percentage" value="<?php echo $sscp; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdno">SSC Seat No</label>
                    <input type="text" class="form-control" name="ssno" id="shdno" aria-describedby="helpId" placeholder="SSC Seat No" value="<?php echo $sscseat; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdp">HSC Percentage </label>
                    <input type="text" class="form-control" name="hscp" id="shdp" aria-describedby="helpId" placeholder="HSC Percentage" value="<?php echo $hscp; ?>"required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdno">HSC Seat No</label>
                    <input type="text" class="form-control" name="hsno" id="shdno" aria-describedby="helpId" placeholder="HSC Seat No" value="<?php echo $hscseat; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdp">Graduation Percentage </label>
                    <input type="text" class="form-control" name="gp" id="shdp" aria-describedby="helpId" placeholder="Graduation Percentage" value="<?php echo $gradp; ?>"required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gpy">Graduation Passing Year</label>
                    <input type="text" class="form-control" name="gpy" id="gpy" aria-describedby="helpId" placeholder="Graduation Passing Year" value="<?php echo $grady; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gsc">CMAT Score (If Available)</label>
                    <input type="text" class="form-control" name="cmat" id="gsc" aria-describedby="helpId" value="<?php echo $cmat; ?>" placeholder="CMAT Score (If Available)">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" value="<?php echo $email; ?>"placeholder="Enter Your Email Address">
                  </div>
                </div>
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <div class="row" style="margin: 0 2px 0 3px;">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="jsc">
                      <input type="checkbox" required="">
                      Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                  </div>
                </div>
              </div>

                   
        <div>
          <button id="submit" type="submit"name="pay6"class="btn btn-primary">Go For Payment</button>
      </div>
            </form>
          </div>

<?php
$con = mysqli_connect("localhost", "root", "", "gmgc");
if ($con) {
  // echo "Connecting6";
} else {
  echo "error";
}
$q = "SELECT * FROM `pg_inquiry` WHERE email='ayushi@gmail.com'";

$sql = mysqli_query($con, $q);
  while ($row = mysqli_fetch_array($sql)) {
    // $id = $row['id'];
    $name = $row['s_name'];
    $s_add = $row['s_address'];
    $s_contact = $row['s_contact'];
    $p_contact = $row['p_contact'];
    $s_gender = $row['s_gender'];
    $dob = $row['dob'];
    $bscp = $row['bsc_pr'];
    $bscsub = $row['bsc_main_sub'];
    $bscy = $row['bsc_p_year'];
    $email = $row['email'];
    $password = $row['password'];
    $trans_id = $row['transaction_id'];}
?>

          <div class="gmpgc box left-intrsution white;" style="margin-top: 20px; padding-top: 20px; margin-left: 29px; width: 96%; color: black; text-align: left; display: none;">
            <label style="color:red;">Note: Token fees for M.Sc. course is 10,000 ₹</label>
            <form action="./adm_edit/gmpgc_edit.php" method="post">
               <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="form-group">
                <label for="br">Select Branch</label>
                <select class="form-control" name="br" id="br" required="">
                  <option value="">-- Select Branch --</option>
                  <option value="M.Sc. Chemistry">M.Sc. Chemistry</option>
                  <option value="M.Sc. Microbiology">M.Sc. Microbiology</option>

                </select>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" name="st" id="st" aria-describedby="helpId" placeholder="Student Full Name as per B.Sc. Marksheet" value="<?php echo $name; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sa">Student Address</label>
                    <input type="text" class="form-control" name="sa" id="sa" aria-describedby="helpId" placeholder="Student Permenant Address" value="<?php echo $s_add; ?>"required="">
                    <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="acont">Student Contact Number</label>
                    <input type="number" class="form-control" name="wp" id="acont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Student Contact Info" value="<?php echo $s_contact; ?>" required="">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cont">Parent Contact Number</label>
                    <input type="number" class="form-control" name="alt" id="cont" aria-describedby="helpId" pattern="[6789][0-9]{9}" maxlength="10" placeholder="Parent Contact Info" value="<?php echo $p_contact; ?>">
                    <!-- <small id="helpId" class="form-text text-muted">10 Digit Number</small> -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" value="<?php echo $s_gender; ?>" required="">
                      <option value="">-- Select Gender --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Trans Gender">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="Date Of Birth" value="<?php echo $dob; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bscper">B.Sc. Percentage </label>
                    <input type="text" class="form-control" name="bscper" id="bscper" aria-describedby="helpId" placeholder="HSC Percentage" value="<?php echo $bscp; ?>" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="shdno">B.Sc. Main Subject</label>
                    <select class="form-control" name="bscsub" id="bscsub" value="<?php echo $bscsub; ?>" required="">
                      <option value="">-- Select your subject --</option>
                      <option value="Chemistry">Chemistry</option>
                      <option value="Microbiology">Microbiology</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bscpass">B.Sc. Passing Year</label>
                    <input type="text" class="form-control" name="bscpass" id="bscpass" aria-describedby="helpId" placeholder="B.Sc. Passing Year" value="<?php echo $bscy; ?>" required="">
                    <small id="helpId" class="form-text text-muted">Ex. 2022</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jsc">Email Address</label>
                    <input type="email" class="form-control" name="email" id="jsc" aria-describedby="helpId" value="<?php echo $email; ?>" placeholder="Enter Your Email Address">
                  </div>
                </div>
              </div>
              
            <input type="hidden" name="email" value="<?php echo $email; ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="passwd">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" value="<?php echo $password; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="jsc">
                      <input type="checkbox" required="">
                      Note: Provided information is correct to the best of my knowledge. I will verify the origianl Certificates/ documents with the Institute as per the instructions provided by the institute.</label>

                  </div>
                </div>
              </div>

                 
        <div>
          <button id="submit" type="submit"name="pay7"class="btn btn-primary">Go For Payment</button>
      </div>
            </form>
          </div>

        </section>
        <?php
     {
        echo '';
    }
// } else {
//     echo 'page not found';
// }
?>