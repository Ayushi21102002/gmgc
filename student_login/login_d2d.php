<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../Bootstrap/CSS/bootlogin.css">
        <title>LOGIN</title>

</head>

<body style="background-color: rgb(231, 231, 231);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"> 

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form id="log" style="background-color: white; width: 100%;" >
                    <div class="row" style=" border-radius: 5px; background-color:rgb(200, 194, 194);">
                     <div class="text-center">
                        <img src="../Bootstrap/admissionform/logo12.png" alt="" style="width: 80px; border-radius: 100%; margin-top: 15px;;" >
                    </div>
                    <h3 style=" font-size:25px; margin-left: 10px; color: BLACK;">Gyanmanjari Group Of Colleges. </h3>
                    </div>
                     <br> 
                   
                    
                    <div class="form-group" > 
                        <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px; margin-right: 46px;">Email-Id:</label>
                        <span style="display:block; overflow:hidden;">
                        <input type="email" class="form-control" placeholder="Enter your email" >
                        </span>
                    </div> <br>


                    <div class="form-group">
                        <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px; margin-right: 35px;">Password:</label>
                        <span style="display:block; overflow:hidden;">
                        <input type="password" class="form-control" placeholder="Enter your password" maxlength="8">
                        </span>
                    </div>
                     
                        <div>
                           <button id="submit" type="submit" class="btn btn-block" style="background-color:rgb(185, 178, 178); color: black; font-weight: bolder; font-size: 19px;"  >Login</button>

                        </div>
                </form>


            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"> </div>
        </div>
    </div>
</body>

</html>