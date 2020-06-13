<?php
session_start();
define('TITLE', 'work');
define('PAGE', 'work');
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

<!--start 2nd coloumn-->
<div class="col-sm-6 mt-5 mx-3">
    <h3 class="text-center">Assigned Work Details</h3>
    <?php
        if(isset($_REQUEST['View']))
        {
            $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();


    
    ?>    
<div class="w3-responsive">
<table class="w3-table-all">
    <tbody>
        <tr class="w3-hover-green">
            <td>Request ID:</td>
            <td><?php if(isset($row['request_id'])) {echo $row['request_id'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request Info:</td>
            <td><?php if(isset($row['request_info'])) {echo $row['request_info'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request Description:</td>
            <td><?php if(isset($row['requester_desc'])) {echo $row['requester_desc'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request Name:</td>
            <td><?php if(isset($row['requester_name'])) {echo $row['requester_name'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Address Line 1:</td>
            <td><?php if(isset($row['requester_add1'])) {echo $row['requester_add2'];} ?></td>
        </tr>                       
         <tr class="w3-hover-green">
            <td>Address Line 2:</td>
            <td><?php if(isset($row['requester_add2'])) {echo $row['requester_add2'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request City:</td>
            <td><?php if(isset($row['requester_city'])) {echo $row['requester_city'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td >Request State:</td>
            <td><?php if(isset($row['requester_state'])) {echo $row['requester_state'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request Zip:</td>
            <td><?php if(isset($row['requester_zip'])) {echo $row['requester_zip'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request email:</td>
            <td><?php if(isset($row['requester_email'])) {echo $row['requester_email'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Request mobile:</td>
            <td><?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Assign date:</td>
            <td><?php if(isset($row['assign_date'])) {echo $row['assign_date'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>Assign tech:</td>
            <td><?php if(isset($row['assign_tech'])) {echo $row['assign_tech'];} ?></td>
        </tr>
        <tr class="w3-hover-green">
            <td>
                Customer Sign
            </td>
            <td></td>
        </tr>
        <tr class="w3-hover-green">
            <td>
                technician Sign
            </td>
            <td></td>
        </tr>
 
    </tbody>
</table>
</div>
<div class="text-center">
    <form action="" class="mb-3 d-inline">
        <input class="btn btn-danger d-print-none mr-3" type="submit" value="Print" onClick="window.print()">
    </form>
    <form action="work.php" class="mb-3 d-inline">        
        <input class="btn btn-secondary d-print-none" type="submit" value="close">
    </form>
</div>
<?php } ?>
</div>
<!--end 2nd coloumn-->

<?php

include('includes/footer.php');
?>