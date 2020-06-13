<?php
define('TITLE', 'RequesterChangePass');
define('PAGE', 'ChangePass');
include('includes/header.php');
include('../dbConnection.php');

session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];
}
else
{
    echo "<script> location.href = 'RequesterLogin.php' </script>";
}

if(isset($_REQUEST['passupdate']))
{
    if($_REQUEST['rPassword'] == "")
    {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Details</div>';        
    }    
    $rPass = $_REQUEST['rPassword'];
    $sql = "UPDATE requesterlogin_tb SET r_password ='$rPass' WHERE r_email = '$rEmail'";
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
        <input type="email" class="form-control"  value="<?php echo $rEmail; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="inputnewpassword">New Password</label>
        <input type="password" class="form-control" name="rPassword" id="rPassword" placeholder="New Password"> 
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