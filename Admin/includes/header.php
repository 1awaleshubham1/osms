<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/w3.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font awesome  --> 
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title><?php echo TITLE ?></title>
    <style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid black;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: left;
}
</style>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</head>
<body onload="myFunction()" style="margin:0;" >
    <div id="loader"></div>
    
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 mr-0" href="dashboard.php"><img src="../images/logo2.png" class="w3-circle w3-spin" style="width:9%; height:9%;"><a class="navbar-brand col-sm-3 mr-0" href="dashboard.php"></a></nav>
    
    <div id="myDiv" class="container-fluid animate-bottom" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-dark sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column text-white d-print-none">

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?>" href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'work') { echo 'active'; } ?>" href="work.php">
                        <i class="fab fa-accessible-icon"></i>Work Order</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
                        <i class="fas fa-align center"></i>Requests</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="Assets.php">
                        <i class="fas fa-database"></i>Assets</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
                        <i class="fas fa-users"></i>Technician</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requester') { echo 'active'; } ?>" href="requester.php">
                        <i class="fas fa-users"></i>Requester</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldproductreport.php">
                        <i class="fas fa-table"></i>Sell Report</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workreport.php">
                        <i class="fas fa-table"></i>Work Report</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
                        <i class="fas fa-key"></i>Change Password</a></li>
                          
                        <li class="nav-item"><a class="nav-link" href="../Requester/logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout</a></li>

                    </ul>
                </div>
            </nav>
