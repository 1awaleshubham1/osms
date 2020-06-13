<?php
define('TITLE', 'sellreport');
define('PAGE', 'sellreport');
include('../dbConnection.php');
include('includes/header.php');
?>

<div class="col-sm-9 col-md-10 mt-5 text-center">
    <form action="" method="POST" class="d-print-none">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="date" class="form-control"
                id="startdate" name="startdate">
            </div><span> to </span>

            <div class="form-group col-md-2">
                <input type="date" class="form-control" id="enddate" name="enddate">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search"> 
            </div>
        </div>
    </form>
    <?php
        if(isset($_REQUEST['searchsubmit']))
        {
            $startdate = $_REQUEST['startdate'];
            $enddate = $_REQUEST['enddate'];
            $sql = "SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";

            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                echo '<p class="bg-dark text-white p-2 mt-4">Details</p>';
                echo '<table class="table">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th scope="col"> Req ID </th>';
                            echo '<th scope="col"> Request Info </th>';
                            echo '<th scope="col"> Name </th>';
                            echo '<th scope="col"> Address  </th>';
                            echo '<th scope="col"> City </th>';
                            echo '<th scope="col"> Mobile </th>';
                            echo '<th scope="col"> technician </th>';
                            echo '<th scope="col"> Assigned Date </th>';
                            
                        echo '</tr>';
                    echo '</thead>';

                    echo '<tbody>';
                    while($row = $result->fetch_assoc())
                    {
                        echo '<tr>';
                            echo '<td>' .$row['request_id']. '</td>';
                            echo '<td>' .$row['request_info']. '</td>';
                            echo '<td>' .$row['requester_name']. '</td>';
                            echo '<td>'.$row['requester_add2'].'</td>';
                            echo '<td>'.$row['requester_city'].'</td>';
                            echo '<td>'.$row['requester_mobile'].'</td>';
                            echo '<td>'.$row['assign_tech'].'</td>';
                            echo '<td>'.$row['assign_date'].'</td>';
                        echo '</tr>';
                    }
                    echo '<tr>';
                    echo '<td>';
                        echo '<input type="submit" class="btn btn-primary d-print-none"
                        value="Print" onClick="window.print()">';
                    echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                echo '</table>';    

            }
            else

            {
                echo "No record found";
            }
        }
    ?>
</div>

<?php

include('includes/footer.php');
?>