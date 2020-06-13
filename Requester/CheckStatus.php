<?php
define('TITLE', 'Service Status');
define('PAGE', 'CheckStatus');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];

}
else
{
    echo "<script> location.href='RequesterLogin.php';</script>";

}
?>

<div class="col-sm-6 mt-5 mx-3"><!--start servie Request From 2nd column-->
    <form action="" method="POST" class="form-inline d-print-none">
        <div class="form-group mr-5 d-print-noness">
            <label for="checkid">Enter Request ID: </label>
                <input type="number" class="form-control"
                id="checkid" onkeypress="isInputNumber(event)" placeholder="Enter Request Info" name="checkid">
                <button type="submit" class="btn btn-danger">Search</button>
        </div>
    </form>
<?php    
    if(isset($_REQUEST['checkid']))
    {
        if($_REQUEST['checkid'] =="")
        {
            $msg = '<div class="alert alert-warning">Fill All Fields</div>';
        }
        else
        {
        $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row['request_id'] == $_REQUEST['checkid'])
        {
?>

<h3 class="bg-dark text-center text-white p-2 mt-5">Assigned Work details</h3>
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
    <form action="" class="mb-3 d-print-none">
        <input class="btn btn-danger mr-3" type="submit" value="Print" onClick="window.print()">
        <input class="btn btn-secondary" type="submit" value="close">
    </form>
</div>
<?php
}
else
{
    $msg = '<div class="alert alert-warning mt-4"> Your request still pending?? </div>';
}
}
}
?>
<?php if(isset($msg)) {echo $msg; } ?>
</div><!--end servie Request From 2nd column-->
<script>
    function isInputNumber(evt)
    {
        var ch = String.forCharCode(evt.which);
        if(!(/[0-9]/.test(ch)))
        {
            evt.preventDefault();
        }
    }
</script>

<?php
include('includes/footer.php');
?>
