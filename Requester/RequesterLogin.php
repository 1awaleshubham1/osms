<?php 
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login']))
{
    if(isset($_REQUEST['rEmail']))
    {
        $rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
        $rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
        $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $rEmail;
            echo "<script> location.href='RequesterProfile.php';</script>";
            exit;
        }
        else
        {
            $msg = '<div class="alert alert-warning mt-2"
            >Enter Valid Email and Password</div>';
        }
    }
}
else{
    echo "<script> location.href='RequesterProfile.php'; </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
	<link rel="stylesheet" href="../css/w3.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font awesome  --> 
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        .custom-margin{
            margin-top: 8vh;
        }
            
    </style>
</head>
<body  style="background-image:url(../images/sfondo_login.jpg);">
	<div class="w3-container">
    <div class="mb-3 mt-5 text-center w3-animate-zoom" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size: 20px;">
    <i class="fas fa-user-secret text-danger"></i>
    Requester Area (Demo)</p>
    <div class="container w3-animate-zoom">
            <div class="row justify-content-center custom-margin">
                <div class="col-sm-6 col-md-4">
                    <form action="" class="shadow-lg p-4" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2 "
                            >Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
                            <small class="form-text">We'll never share your email with anyone else.</small>
                            
                            <div class="form-group">
                                <i class="fas fa-key"></i><label for="pass" class="font-weight-bold
                                pl-2">Pasword</label><input type="password" class="form-control" name="rPassword" 
                                placeholder="Password" name="rPassword">
                            </div>

                            <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold 
                            btn-block shadow-sm">Login</button>
                            <?php if(isset($msg)) {echo $msg;}?>
                        </div>
                    </form>
                    <div class="text-center"><a href="../index.php" 
                    class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
                </div>
            </div>
    </div>    
	</div>
    <!--bootstrap javascript  -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js">Login</script>
    <script src="../js/all.min.js">SignUp</script>
</body>
</html>