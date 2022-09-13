<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<style>
    p {
        font-weight: bold;
        font-size: 22px;
        /* border: 3px solid red; */
        display: block;
        width: 44.5%;
        text-align: center;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
    }
</style>





  

    <p>Inquiry Data</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Student Contact</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>View</th>
                <th>Confirm</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
                
                $con = mysqli_connect('localhost','root','','gmgc');
                
                $cmd ="SELECT * FROM diplo_inquiry";
                 $index = 0;
                $result = mysqli_query($con,$cmd);
                while($row = mysqli_fetch_array($result))
                  { 
            
                    $s_name = $row['s_name'];
                    $s_branch = $row['s_branch'];
                    $s_contact = $row['s_contact'];
                    $s_gender = $row['s_gender'];
                    $dob = $row['dob'];
                    $email = $row['email'];
                    
                    ?>
                        <tr> 
                            <td  scope="row"><?php echo $index = $index + 1 ;?></td>
                       
                            <td><?php echo $s_name;?></td>
                            <td><?php echo $s_branch;?></td>
                            <td><?php echo $s_contact;?></td>
                            <td><?php echo $s_gender;?></td>
                            <td><?php echo $dob;?></td>
                            <td><?php echo $email;?></td>
    

                        <td>
                            <form action="../view/view/diplo_view.php" method="POST">
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <center>

                                    <button type="submit" name="view3" id="view" class="btn btn-primary" style="text-align:'center';"><a>View </a></button>
                                </center>
                            </form>

                        </td>
                        <td>
                            <form action="../update_form/be_updatef.php" method="POST">
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <center>

                                    <button type="submit" name="update" id="update" class="btn btn-success" style="text-align:'center';"><a>Confirm</a></button>
                                </center>
                            </form>
                        </td>
                        <td>
                            <form action="../update_form/be_updatef.php" method="POST">
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <center>

                                    <button type="submit" name="update" id="update" class="btn btn-danger" style="text-align:'center';"><a>Delete</a></button>
                                </center>
                            </form>
                        </td>
                    </tr>

              <?php
                  }
                  ?>

            </tbody>

       
        
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>