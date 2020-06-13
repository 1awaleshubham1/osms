<?php
session_start();
define('TITLE', 'dashboard');
define('PAGE', 'dashboard');
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

$sql = "SELECT max(request_id) FROM submitrequest_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();
$submitrequest = $row[0];



$sql = "SELECT max(rno) FROM assignwork_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();
$assignwork = $row[0];


$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
$tech = $result->num_rows;
?>

            <!-- submit Request form-->  
            <div class="col-sm-9 col-md-10">
                <div class="row text-center mx-5">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Requests Received</div>
                            <div class="card-body">
                            <h4 class="card-title"><?php  if($submitrequest>0){ echo $submitrequest; } else { echo '0';}; ?></h4>
                            <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Work Assigned</div>
                            <div class="card-body">
                            <h4 class="card-title"><?php if($assignwork>0){ echo $assignwork ; } else { echo '0 ';};  ?></h4>
                            <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                            <div class="card-header">No. Of Technician</div>
                            <div class="card-body">
                            <h4 class="card-title"><?php if($tech>0){ echo $tech; } else { echo '0';};   ?></h4>
                            <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
            
                </div>

                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">List of Requesters</p>
                    <?php
                        $sql = "SELECT * FROM requesterlogin_tb";
                        $result = $conn->query($sql);
                        if($result->num_rows>0)
                        {
                            echo '<div class="w3-responsive"> </div>';
                            echo '
                            <table class="w3-table-all">
                                <thead>
                                    <tr class="w3-hover-green">
                                        <th scope="col">Requester</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>

                                <tbody>';
                                    while($row = $result->fetch_assoc())
                                    {
                                    echo '<tr class="w3-hover-black">'; 
                                        echo '<td>' .$row["r_login_id"] .'</td>';
                                        echo '<td>' .$row["r_name"] .  '</td>';
                                        echo '<td>' .$row["r_email"]. '</td>';
                                    echo '</tr>';
                                    }
                                echo '</tbody>
                            </table>
                            ';
                            echo '</div>';
                        
                        }
                        else{
                            echo '0 Results'; 
                        }
                    ?>
                    <hr>
                </div>

            </div><!--end of dashboard 2-->
