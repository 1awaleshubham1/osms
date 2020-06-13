<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];
}
else
{
    echo "<script> location.href='RequesterLogin.php' </script>";
}
if(isset($_REQUEST['submitrequest']))
{
    //checking for empty fields
    if(($_REQUEST['requestinfo'] == "")||($_REQUEST['requestdesc'] == "")||
    ($_REQUEST['requesteradd1'] == "")||($_REQUEST['requesteradd2'] == "")||
    ($_REQUEST['requestercity'] == "")||($_REQUEST['requesterstate'] == "")||
    ($_REQUEST['requesterzip'] == "")||($_REQUEST['requesteremail'] == "")||
    ($_REQUEST['requestermobile'] == "")||($_REQUEST['requesterdate'] == ""))
    {
        $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All Fields</div>";

    }else
    {

        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['requestdesc'];
        $rname = $_REQUEST['requestername'];
        $raddr1 = $_REQUEST['requesteradd1'];
        $raddr2 = $_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail = $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $rdate = $_REQUEST['requesterdate']; 

        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, 
            requester_city, requester_state, requester_zip, requester_email, requester_mobile, requester_date) 
            values('$rinfo', '$rdesc', '$rname', '$raddr1', '$raddr2', '$rcity',
             '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";

        if($conn->query($sql) == TRUE)
        {
            $genid = mysqli_insert_id($conn);
            $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'>Request submitted successfully</div>"; 
            
            $_SESSION['myid'] = $genid;
            echo "<script> location.href='submitrequestsuccess.php' </script>";

        }
        else
        {
            $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Unable to Submit</div>";
        }
    }

}
?>

<div class="col-sm-9 col-md-10 mt-5" >

<!--start servie Request From 2nd column-->
    <form class="mx-5" action="" method="POST">
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
                <input type="text" class="form-control"
                id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
        </div>
        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control"
            id="inputRequestDescription" placeholder="Write Description"
            name="requestdesc">

        </div>
        
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control"
            id="inputName" placeholder="Awale shubham"
            name="requestername">

        </div>
        
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control"
                id="inputAddress" placeholder="House No. 123"
                name="requesteradd1">

            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Address Line 2</label>
                <input type="text" class="form-control"
                id="inputAddress2" placeholder="Railway Colony"
                name="requesteradd2">
            </div>                
        </div>
        
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control"
                id="inputCity" placeholder="enter city"
                name="requestercity">

            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control"
                id="inputState" placeholder="enter state"
                name="requesterstate">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="number" class="form-control"
                id="inputZip" placeholder="enter Zip"
                name="requesterzip" onkeypress="isInputNumber(event)">
            </div>                
        </div>
        
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control"
                id="inputEmail" placeholder="enter city"
                name="requesteremail">

            </div>
            <div class="form-group col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="number" class="form-control"
                id="inputMobile" placeholder="enter mobile"
                name="requestermobile" onkeypress="isInputNumber(event)">
            </div>
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control"
                id="inputDate" placeholder="enter date"
                name="requesterdate">
            </div>                
        </div>
        <button type="submit" class="btn btn-danger"
        name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    <?php if(isset($msg)){echo $msg;} ?>
</div><!--end servie Request From 2nd column-->
 
<!--only number for INput fields -->
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