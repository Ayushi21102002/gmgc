<?php
                $conn = mysqli_connect('localhost','root','','gmgc1');
                // include '../includes/connection.php';
                if(isset($_POST['view2'])){
                    $email =$_POST['email'];
                
                $cmd ="SELECT * FROM d2d_inquiry WHERE email='$email'";
 
                
                $result = mysqli_query($conn,$cmd);
                   
                   while($rows = mysqli_fetch_array($result))
                     { 
                        
                        $s_course = $rows['s_course'];
                        $s_branch = $rows['s_branch'];
                        $s_name = $rows['s_name'];
                        $s_address = $rows['s_address'];
                        $s_contact = $rows['s_contact'];
                        $p_contact = $rows['p_contact'];
                        $s_gender = $rows['s_gender'];
                        $dob = $rows['dob'];
                        $s_ssc = $rows['s_ssc'];
                        $ssc_seatno = $rows['ssc_seatno'];
                        $diplo_insti_name = $rows['diplo_insti_name'];
                        $diplo_branch_name = $rows['diplo_branch_name'];
                        $diplo_p_year = $rows['diplo_p_year'];
                        $diplo_seatno = $rows['diplo_seatno'];
                        $diplo_cgpa = $rows['diplo_cgpa'];
                      $email = $rows['email'];
        

                    } 
                }
                        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Association of Gyanmanjari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
      
    <div class="m-4" style="margin-top:50px;">

        <h3 align="center"> Student Details</h3>

        <div class="table-responsive" style="margin-top:20px;">

            <table id="load" class="table table-striped table-bordered zero-configuration" align="center" style="width:90%;">
                <tbody>
                 <!-- <form action= "be_insert.php" method="POST">  -->
                  


                    <tr>
                        <td> Student Course </td>
                        <td><?php echo $s_course ;?></td>
                    </tr>
                    <tr>
                        <td>Student Branch</td>
                        <td><?php echo $s_branch ;?></td>
                    </tr>
                    <tr>
                        <td> Student Name </td>
                        <td><?php echo $s_name ;?></td>
                    </tr>
                    <tr>
                        <td> Student Address </td>
                        <td><?php echo $s_address;?></td>
                    </tr>
                    <tr>
                        <td>Student Contact</td>
                        <td><?php echo  $s_contact;?></td>
                    </tr>
                    <tr>
                        <td>Parent Contact</td>
                        <td><?php echo $p_contact ;?></td>
                    </tr>
                   
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $s_gender;?></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td><?php echo $dob;?></td>
                    </tr>
                    <tr>
                        <td>SSC pr%</td>
                        <td><?php echo $s_ssc;?></td>
                    </tr>
                    <tr>
                        <td>SSC Seat No</td>
                        <td><?php echo  $ssc_seatno;?></td>
                    </tr>
                    <tr>
                        <td>Diplo Institute </td>
                        <td><?php echo $diplo_insti_name;?></td>
                    </tr>
                    <tr>
                        <td>Diplo Branch</td>
                        <td><?php echo $diplo_branch_name;?></td>
                    </tr>
                    <tr>
                        <td>Diplo Passing Year</td>
                        <td><?php echo  $diplo_p_year;?></td>
                    </tr>
                    <tr>
                        <td>Diplo Seatno</td>
                        <td><?php echo  $diplo_seatno;?></td>
                    </tr>
                    <tr>
                        <td>Diplo CGPA</td>
                        <td><?php echo  $diplo_cgpa;?></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><?php echo  $email;?></td>
                    </tr>
                    <!-- </form> -->
                    <?php
                     
                     ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>