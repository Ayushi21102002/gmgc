<?php
                $conn = mysqli_connect('localhost','root','','gmgc1');
                // include '../includes/connection.php';
                if(isset($_POST['view4'])){
                    $email =$_POST['email'];
                
                $cmd ="SELECT * FROM bpharm_inquiry WHERE email='$email'";
 
                
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
                        $s_hsc = $rows['s_hsc'];
                        $hsc_seatno = $rows['hsc_seatno'];
                        $hsc_p_year = $rows['hsc_p_year'];
                        $dpharm_p_year= $rows['dpharm_p_year'];
                        $dpharm_mark= $rows['dpharm_mark'];
                        $dpharm_seatno= $rows['dpharm_seatno'];
                        $s_gujcet = $rows['s_gujcet'];
                        $s_neet = $rows['s_neet'];
                        $s_group=$rows['s_group'];
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
                        <td>HSC pr% </td>
                        <td><?php echo $s_hsc;?></td>
                    </tr>
                    <tr>
                        <td>HSC Seat No</td>
                        <td><?php echo $hsc_seatno;?></td>
                    </tr>
                    <tr>
                        <td>HSC Passing Year</td>
                        <td><?php echo  $hsc_p_year;?></td>
                    </tr>
                    <tr>
                        <td>Dpharm Passing Year</td>
                        <td><?php echo  $dpharm_p_year;?></td>
                    </tr>
                    <tr>
                        <td>Dpharm Mark</td>
                        <td><?php echo  $dpharm_mark;?></td>
                    </tr>
                    <tr>
                        <td>Dpharm Seatno</td>
                        <td><?php echo  $dpharm_seatno;?></td>
                    </tr>
                  
                    <tr>
                        <td>GUJCET Score</td>
                        <td><?php echo  $s_gujcet;?></td>
                    </tr>
                    <tr>
                        <td>NEET Score</td>
                        <td><?php echo  $s_neet;?></td>
                    </tr>
                    <tr>
                        <td>Science Group</td>
                        <td><?php echo  $s_group;?></td>
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