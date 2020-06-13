<?php
session_start();
define('TITLE', 'changepass');
define('PAGE', 'changepass');
include('../dbConnection.php');
include('includes/header.php');
if($_SESSION['is_adminlogin'])
{
    $aEmail = $_SESSION['aEmail'];
}
else
{
    echo "<script> location.href='login.php'; </script>";
}


if(isset($_REQUEST['passupdate']))
{
    if($_REQUEST['aPassword'] == "")
    {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Details</div>';        
    }    
    $rPass = $_REQUEST['aPassword'];
    $sql = "UPDATE adminlogin_tb SET a_password ='$rPass' WHERE a_email = '$aEmail'";
    if($conn->query($sql))
    {
        $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Successfully updated</div>';  
    }
    else
    {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Update</div>';  
    }
}
?>


<div class="col-sm-9 col-md-10 mt-5">
<form action="" class = "mt-5 mx-5" method="POST">
    <div class="form-group">  
        <label for = "inputEmail">Email</label>
        <input type="email" class="form-control"  value="<?php echo $aEmail; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="inputnewpassword">New Password</label>
        <input type="password" class="form-control" name="aPassword" id="aPassword" placeholder="New Password"> 
    </div>
    <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
    <button type="reset" class="btn btn-secondary mt-4">Reset</button>
</form>
<?php 

if(isset($passmsg)) 
{ 
    echo $passmsg;
}
?>
</div>


<?php

include('includes/footer.php');
?>