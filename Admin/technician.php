<?php
session_start();
define('TITLE', 'requester');
define('PAGE', 'requester');
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

<div class = "col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">List Of Technician</p>
    <?php
    $sql = "SELECT * FROM technician_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo '<div class="w3-responsive">';
        echo '<table class="w3-table-all">';
            echo '<thead>';
                echo '<tr class="w3-hover-green">';
                    echo '<th scope="col">Emp ID </th>';
                    echo '<th scope="col">Name</th>';
                    echo '<th scope="col">City</th>';
                    echo '<th scope="col">Mobile</th>';
                    echo '<th scope="col">Email</th>';
                    echo '<th scope="col">Action</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                while($row = $result->fetch_assoc())
                {
                    echo '<tr class="w3-hover-black">';
                        echo '<td>'.$row['empid'] .'</td>';
                        echo '<td>'.$row['empName'].'</td>';
                        echo '<td>'.$row['empCity'].'</td>'; 
                        echo '<td>'.$row['empMobile'].'</td>'; 
                        echo '<td>'.$row['empEmail'].'</td>'; 
                        echo '<td>';
                            echo '<form action="editemp.php" method="POST" class="d-inline">';
                                echo '<input type="hidden" name="id" value='.$row["empid"].'> 
                                <button type="submit" class="btn btn-info mr-3" name="Edit" 
                                value="Edit"><i class="fas fa-pen"> </i></button>';
                            echo '</form>';
                            echo '<form action="" method="POST" class="d-inline">';
                                echo '<input type="hidden" name="empid" value='.$row["empid"].'> 
                                <button type="submit" class="btn btn-info mr-3" name="Delete" 
                                value="Delete"><i class="far fa-trash-alt"> </i></button>';
                            echo '</form>';
                        echo '</td>';
                    echo '</tr>';
                }
            echo '</tbody>'; 
        echo '</table>';
            }
            else
            {
                echo '<div class="alert alert-success" role="alert">0 results</div>';
            }
        echo '</div>';         
       
    
    ?>
</div>

<?php
    if(isset($_REQUEST['Delete']))
    {
        $sql = "DELETE FROM technician_tb WHERE empid = {$_REQUEST['empid']}";
        if($conn->query($sql) == TRUE)
        {
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        }    
        else
        {
            echo '<div class="alert alert-danger" role="alert">Unable to Delete</div>';    
        }
    }
?>
</div>
<div class="float-right"> 
    <a href="insertemp.php" class="btn btn-danger">
    <i class="fas fa-plus fa-2x">
    </i></a>
</div>

</div>
<!--bootstrap javascript  -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>    
</body>
</html>