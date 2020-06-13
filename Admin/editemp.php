<?php
session_start();
define('TITLE', 'UPdate Technician');
define('PAGE', 'Technician');
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
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Technician Details</h3>
    <?php 
        if(isset($_REQUEST['Edit']))
        {
            $sql = "SELECT * FROM technician_tb WHERE empid = {$_REQUEST['id']}";
            
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();    
        }
            if(isset($_REQUEST['empupdate']))
            {    
             if(($_REQUEST['empCity']=="")|| ($_REQUEST['empMobile']=="")||($_REQUEST['empEmail']=="")||($_REQUEST['empName']==""))
                {
                    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';

                }
                else
                {
                    $eId = $_REQUEST['empId'];
                    $eName = $_REQUEST['empName'];
                    $eCity = $_REQUEST['empCity'];
                    $eMobile = $_REQUEST['empMobile'];
                    $eEmail = $_REQUEST['empEmail'];
                    
                    $sql = "UPDATE technician_tb SET empid = '$eId', empName = '$eName', empCity = '$eCity', empMobile = '$eMobile', empEmail = '$eEmail'  WHERE empid = '$eId'";

                    if($conn->query($sql) == TRUE)
                    {
                        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
                    }
                    else
                    {
                        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
                    }
                }
            }
        
    ?>
    <form action="" method="POST"> 
        <div class="form-group">
            <label for="empId">Emp ID</label>
            <input type="text" class="form-control" id="empId" name="empId"
            value="<?php if(isset($row['empid'])) echo $row['empid']; ?>" readonly>
        </div> 
        <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" id="empName" name="empName"
            value="<?php if(isset($row['empName'])) echo $row['empName']; ?>">
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" class="form-control" id="empCity" name="empCity"
            value="<?php if(isset($row['empCity'])) echo $row['empCity']; ?>">
        </div>
        <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="text" class="form-control" id="empMobile" name="empMobile"
            value="<?php if(isset($row['empMobile'])) echo $row['empMobile']; ?>">
        </div>
        
        <div class="form-group">
            <label for="empEmail">E-mail</label>
            <input type="text" class="form-control" id="empEmail" name="empEmail"
            value="<?php if(isset($row['empEmail'])) echo $row['empEmail']; ?>">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" 
            name="empupdate">Update</button>

             <a href="technician.php" class="btn btn-secondary">Close</a>
        </div>
        
        <?php if(isset($msg)) {echo $msg; } ?>
    </form>
</div>

<?php

include('includes/footer.php');
?>