<!DOCTYPE html>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="./css/inquiry.css">
  <script src="./js/inquiry.js"></script>
  
 </head>




<body>

  <div>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMIT | Bhavnagar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
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
            <div class="row">
              <div class="text-center">
            <h2 class="headding5">GMGC INQUIRY FORM (BATCH : 2022)</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Start of BE form -->

      <div class="left-intrsution white;"
        style="margin-top: 20px; padding-top: 20px; margin-left:15px; text-align:left;">
        <div class="row">
          <div class="col-md-1">
            &nbsp;
          </div>
          <div class="col-md-2" id="A">
            <h4><b>Select Your Institute</b></h4>
          </div>
          <div class="col-md-6">
            <select id="my_select" name="s_course" class="form-control" style="margin-top: 3px; border: 1px solid #e1e1e1;">
              <option>Select Institute</option>
              <option value="gmit">Gyanmanjari Institute of Technology (GMIT) - 1st Year Degree Engineering</option>
              <option value="gmitd2d">Gyanmanjari Institute of Technology (GMIT) - Diploma To Degree (D2D) Engineering</option>
              <option value="gmdc">Gyanmanjari Diploma Engineering College (GMDC)</option>
              <option value="gmpc">Gyanmanjari Pharmacy College (GMPC)</option>
              <option value="gmsc">Gyanmanjari Science College (GMSC)</option>
              <option value="gmcc">Gyanmanjari College of Computer Application (GMCC)</option>
              <option value="gmpgc">Gyanmanjari PG Center (GMPGC)</option>
            </select>
          </div>
        </div>
      </div>

      <div class="gmit box left-intrsution white;"
        style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: none;">
        <!-- <lable style="color:red;">Note: Token fees for the selected course is 10,000 ₹</lable> -->
        <form action="./insert/be_insert.php" method="post">
          <input type="hidden" name="s_course"
            value="Gyanmanjari Institute of Technology (GMIT) - 1st Year Degree Engineering">
          <div class="form-group">
            <label for="br">Select Branch<text style="color:red"> *</text></label>
            <select class="form-control" name="s_branch" id="br" required>
              <option value="">-- Select Branch --</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
            </select>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="sn">Student Full Name<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
                  placeholder="Student Full Name as per SSC/HSC Marksheet" required>
                <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ad">Student Address<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
                  placeholder="Student Permenant Address" required>
                <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
                  pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
                <small id="helpId" class="form-text text-muted">10 Digit Number</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pcont">Parent Contact Number</label>
                <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
                  pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
                <small id="helpId" class="form-text text-muted">10 Digit Number</small>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="gn">Gender<text style="color:red"> *</text></label>
                <select class="form-control" name="s_gender" id="gn" required>
                  <option value="">-- Select Gender --</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Trans Gender">Others</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
                <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
                  placeholder="Date Of Birth" required>
                <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
                  placeholder="SSC Percentage" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="sscno">SSC Seat No<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
                  placeholder="SSC Seat No" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="hscp">HSC Percentage<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="s_hsc" id="hscp" aria-describedby="helpId"
                  placeholder="HSC Percentage" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="hscno">HSC Seat No<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="hsc_seatno" id="hscno" aria-describedby="helpId"
                  placeholder="HSC Seat No" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="hscpy">HSC Passing Year<text style="color:red"> *</text></label>
                <input type="text" class="form-control" name="hsc_p_year" id="hscpy" aria-describedby="helpId"
                  placeholder="HSC Passing Year" required>
                <small id="helpId" class="form-text text-muted">Ex. 2022</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gsc">GUJCET Score (If Available)</label>
                <input type="text" class="form-control" name="s_gujcet" id="gsc" aria-describedby="helpId"
                  placeholder="GUJCET Score (If Available)">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="jsc">JEE Score (If Available)</label>
                <input type="text" class="form-control" name="s_jee" id="jsc" aria-describedby="helpId"
                  placeholder="JEE Score (If Available)">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email Address<text style="color:red"> *</text></label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                  placeholder="Enter Your Email Address" required>
                <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="checkbox" required>
                Note: Provided information is correct to the best of my knowledge. I will verify the original
                Certificates/Documents with the Institute.</label>
              </div>
            </div>
          </div>

          <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary"></button>
          <br>
          <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

        </form>
      </div>
    </section>
  </div>

  

  <!-- End of BE form -->

  <!-- Start of D2D form -->
  <div class="gmitd2d box left-intrsution white;"
    style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for the selected course is 10,000 ₹</lable> -->
    <form action="./insert/d2d_insert.php" method="post">
      <input type="hidden" name="s_course"
        value="Gyanmanjari Institute of Technology (GMIT) - Diploma To Degree (D2D) Engineering">
      <div class="form-group">
        <label for="br">Select Branch<text style="color:red"> *</text></label>
        <select class="form-control" name="s_branch" id="br" required>
          <option value="">-- Select Branch --</option>
          <option value="Computer Engineering">Computer Engineering</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
          <option value="Electrical Engineering">Electrical Engineering</option>
        </select>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per SSC/HSC Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
              placeholder="SSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscno">SSC Seat No</label>
            <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
              placeholder="SSC Seat No">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="din">Diploma Institute Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="diplo_insti_name" id="din" aria-describedby="helpId"
              placeholder="Diploma Institute Name" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dbr">Diploma Branch Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="diplo_branch_name" id="dbr" aria-describedby="helpId"
              placeholder="Diploma Branch Name" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="dpy">Diploma Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="diplo_p_year" id="dpy" aria-describedby="helpId"
              placeholder="Diploma Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dsno">Diploma Er.Number/Seat Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="diplo_seatno" id="dsno" aria-describedby="helpId"
              placeholder="Diploma Er.Number" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="dcp">Diploma CGPA/Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="diplo_cgpa" id="dcp" aria-describedby="helpId"
              placeholder="Diploma CGPA/Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address" required>
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" required>
            Note: Provided information is correct to the best of my knowledge. I will verify the original
            Certificates/Documents with the Institute.</label>

          </div>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of D2D form -->

  <!-- Start of Diploma form -->

  <div class="gmdc box left-intrsution white;"
  style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for the selected course is 5,000 ₹</lable> -->
    <form action="./insert/diplo_insert.php" method="post">
      <input type="hidden" name="s_course" value="Gyanmanjari Diploma Engineering College (GMDC)">
      <div class="form-group">
        <label for="br">Select Branch<text style="color:red"> *</text></label>
        <select class="form-control" name="s_branch" id="br" required>
          <option value="">-- Select Branch --</option>
          <option value="Computer Engineering">Computer Engineering</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
          <option value="Electrical Engineering">Electrical Engineering</option>
        </select>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per SSC Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
              placeholder="SSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscno">SSC Seat No</label>
            <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
              placeholder="SSC Seat No">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscpy">SSC Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="ssc_p_year" id="sscpy" aria-describedby="helpId"
              placeholder="SSC Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address" required>
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" required>
            Note: Provided information is correct to the best of my knowledge. I will verify the original
            Certificates/Documents with the Institute.</label>
          </div>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of Diploma form -->

  <!-- Start of Bpharm form -->

  <div class="gmpc box left-intrsution white;"
  style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for the selected course is 10,000 ₹</lable> -->
    <form action="./insert/bpharm_insert.php" method="post">
      <input type="hidden" name="s_course" value="Gyanmanjari Pharmacy College (GMPC)">
      <div class="form-group">
        <label for="br">Select Branch<text style="color:red"> *</text></label>
        <select class="form-control" name="s_branch" id="br" required>
          <option value="">-- Select Branch --</option>
          <option value="B.Pharm" selected>B.Pharm</option>
        </select>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per SSC/HSC Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
              placeholder="SSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscno">SSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
              placeholder="SSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscp">HSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_hsc" id="hscp" aria-describedby="helpId"
              placeholder="HSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscno">HSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="hsc_seatno" id="hscno" aria-describedby="helpId"
              placeholder="HSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscy">HSC Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="hsc_p_year" id="hscy" aria-describedby="helpId"
              placeholder="HSC Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dpharm">D.Pharm Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="dpharm_p_year" id="dpharm" aria-describedby="helpId"
              placeholder="D.Pharm Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="hscp">D.Pharm Percentage<text style="color:red"> *</text></label>
              <input type="text" class="form-control" name="dpharm_mark" id="hscp" aria-describedby="helpId"
                placeholder="D.Pharm Percentage" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="hscno">D.Pharm Seat No<text style="color:red"> *</text></label>
              <input type="text" class="form-control" name="dpharm_seatno" id="hscno" aria-describedby="helpId"
                placeholder="D.Pharm Seat No" required>
            </div>
          </div>
        </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gsc">GUJCET Score (If Available)</label>
            <input type="text" class="form-control" name="s_gujcet" id="gsc" aria-describedby="helpId"
              placeholder="GUJCET Score (If Available)">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="nsc">NEET Score (If Available)</label>
            <input type="text" class="form-control" name="s_neet" id="nsc" aria-describedby="helpId"
              placeholder="NEET Score (If Available)">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="grp">12th Science Group<text style="color:red"> *</text></label>
            <select class="form-control" name="s_group" id="grp" required>
              <option value="">-- Select Group --</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address" required>
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="checkbox" required>
          Note: Provided information is correct to the best of my knowledge. I will verify the original Certificates/
          Documents with the Institute.</label>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset1" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of Bpharm form -->

  <!-- Start of Bsc form -->

  <div class="gmsc box left-intrsution white;"
  style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for B.Sc. course is 5,000 ₹</lable> -->
    <form action="./insert/bsc_insert.php" method="post">
      <input type="hidden" name="s_course" value="Gyanmanjari Science College (GMSC)">
      <div class="form-group">
        <label for="br">Select Branch<text style="color:red"> *</text></label>
        <select class="form-control" name="s_branch" id="br" required>
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
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per SSC/HSC Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
              placeholder="SSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscno">SSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
              placeholder="SSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscp">HSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_hsc" id="hscp" aria-describedby="helpId"
              placeholder="HSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscno">HSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="hsc_seatno" id="hscno" aria-describedby="helpId"
              placeholder="HSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscpy">HSC Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="hsc_p_year" id="hscpy" aria-describedby="helpId"
              placeholder="HSC Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="nsc">M.K.B.U. Online Form No.<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="mkbu_form_no" id="mkbuformno" aria-describedby="helpId"
              placeholder="M.K.B.U. Online Form No." required>

          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="grp">12th Science Group<text style="color:red"> *</text></label>
            <select class="form-control" name="science_group" id="grp" required>
              <option value="">-- Select Group --</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address">
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" required>
            Note: Provided information is correct to the best of my knowledge. I will verify the original
            Certificates/Documents with the Institute.</label>
          </div>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of Bsc form -->

  <!-- Start of MCA form -->

  <div class="gmcc box left-intrsution white;"
  style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for the selected course is 10,000 ₹</lable> -->
    <form action="./insert/mca_insert.php" method="post">
      <input type="hidden" name="s_course" value="Gyanmanjari College of Computer Application (GMCC)">
      <div class="form-group">
        <label for="br">Graduation Course<text style="color:red"> *</text></label>
        <select class="form-control" name="g_course" id="br" required>
          <option value="">-- Select Course --</option>
          <option value="bca">BCA</option>
          <option value="bsc">Bsc-IT</option>
          <option value="bcom">B.com</option>
        </select>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per SSC/HSC Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required="">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscp">SSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_ssc" id="sscp" aria-describedby="helpId"
              placeholder="SSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sscno">SSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="ssc_seatno" id="sscno" aria-describedby="helpId"
              placeholder="SSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscp">HSC Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_hsc" id="hscp" aria-describedby="helpId"
              placeholder="HSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="hscno">HSC Seat No<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="hsc_seatno" id="hscno" aria-describedby="helpId"
              placeholder="HSC Seat No" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gpr">Graduation Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="graduation_pr" id="gpr" aria-describedby="helpId"
              placeholder="Graduation Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="gpy">Graduation Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="graduation_p_year" id="gpy" aria-describedby="helpId"
              placeholder="Graduation Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="cmat">CMAT Score (If Available)</label>
            <input type="text" class="form-control" name="cmat" id="cmat" aria-describedby="helpId"
              placeholder="CMAT Score (If Available)">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address" required>
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" required="">
            Note: Provided information is correct to the best of my knowledge. I will verify the original
            Certificates/Documents with the Institute.</label>
          </div>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of MCA form -->

  <!-- Start of PG form -->

  <div class="gmpgc box left-intrsution white;"
   style="margin-top: 20px; padding-top: 20px; margin-left: 15px; color: black; text-align: left; display: inline-block;">
    <!-- <lable style="color:red;">Note: Token fees for M.Sc. course is 10,000 ₹</lable> -->
    <form action="./insert/pg_insert.php" method="post">
      <input type="hidden" name="s_course" value="Gyanmanjari PG Center (GMPGC)">
      <div class="form-group">
        <label for="br">Select Branch<text style="color:red"> *</text></label>
        <select class="form-control" name="s_branch" id="br" required>
          <option value="">-- Select Branch --</option>
          <option value="M.Sc. Chemistry">M.Sc. Chemistry</option>
          <option value="M.Sc. Microbiology">M.Sc. Microbiology</option>

        </select>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="sn">Student Full Name<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_name" id="sn" aria-describedby="helpId"
              placeholder="Student Full Name as per B.Sc. Marksheet" required>
            <small id="helpId" class="form-text text-muted">Ex. Firstname Middlename Lastname</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ad">Student Address<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_address" id="ad" aria-describedby="helpId"
              placeholder="Student Permenant Address" required>
            <small id="helpId" class="form-text text-muted">Ex. Block no, Street, City...</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="scont">Student Contact Number<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="s_contact" id="scont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Student Contact Info" required>
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="pcont">Parent Contact Number</label>
            <input type="text" class="form-control" name="p_contact" id="pcont" aria-describedby="helpId"
              pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Parent Contact Info">
            <small id="helpId" class="form-text text-muted">10 Digit Number</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="gn">Gender<text style="color:red"> *</text></label>
            <select class="form-control" name="s_gender" id="gn" required>
              <option value="">-- Select Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Trans Gender">Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dob">Date Of Birth<text style="color:red"> *</text></label>
            <input type="date" class="form-control" name="dob" id="dob" aria-describedby="helpId"
              placeholder="Date Of Birth" required>
            <small id="helpId" class="form-text text-muted">Ex. 01-01-2000</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="bscper">B.Sc. Percentage<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="bsc_pr" id="bscper" aria-describedby="helpId"
              placeholder="HSC Percentage" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="shdno">B.Sc. Main Subject<text style="color:red"> *</text></label>
            <select class="form-control" name="bsc_main_sub" id="bscsub" required>
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
            <label for="bscpass">B.Sc. Passing Year<text style="color:red"> *</text></label>
            <input type="text" class="form-control" name="bsc_p_year" id="bscpass" aria-describedby="helpId"
              placeholder="B.Sc. Passing Year" required>
            <small id="helpId" class="form-text text-muted">Ex. 2022</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email Address<text style="color:red"> *</text></label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
              placeholder="Enter Your Email Address" required>
            <!-- <small id="helpId" class="form-text text-muted">Includes @</small> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input type="checkbox" required>
            Note: Provided information is correct to the best of my knowledge. I will verify the original
            Certificates/Documents with the Institute.</label>
          </div>
        </div>
      </div>

      <button type="submit" name="submit" id="add" class="col-md-1 btn btn-primary">Submit</button>
      <br>
      <button type="reset" id="reset" class="col-md-1 btn btn-danger">Reset</button>

    </form>
  </div>

  <!-- End of PG form -->
  </section>

</body>
</html>