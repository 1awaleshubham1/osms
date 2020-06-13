<?php
session_start();
define('TITLE', 'assets');
define('PAGE', 'Assets');
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
    <p class="bg-dark text-white p-2">Product/Part Details</p>
    <?php
    $sql = "SELECT * FROM assets_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo '<div class="w3-responsive">';
        echo '<table class="w3-table-all">';
            echo '<thead>';
                echo '<tr class="w3-hover-green">';
                    echo '<th scope="col">PID </th>';
                    echo '<th scope="col">Name</th>';
                    echo '<th scope="col">DOP</th>';
                    echo '<th scope="col">Available</th>';
                    echo '<th scope="col">Total</th>';
                    echo '<th scope="col">Original Cost Each</th>';
                    echo '<th scope="col">Selling Cost Each</th>';
                    echo '<th scope="col">Action</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                while($row = $result->fetch_assoc())
                {
                    echo '<tr class="w3-hover-black">';
                        echo '<td>'.$row['pid'] .'</td>';
                        echo '<td>'.$row['pname'].'</td>';
                        echo '<td>'.$row['pdop'].'</td>'; 
                        echo '<td>'.$row['pava'].'</td>'; 
                        echo '<td>'.$row['ptotal'].'</td>'; 
                        echo '<td>'.$row['poriginalcost'].'</td>'; 
                        echo '<td>'.$row['psellingcost'].'</td>'; 
                        echo '<td>';
                            echo '<form action="editproduct.php" method="POST" class="d-inline">';
                                echo '<input type="hidden" name="id" value='.$row["pid"].'> 
                                <button type="submit" class="btn btn-success mr-3" name="Edit" 
                                value="Edit"><i class="fas fa-pen"> </i></button>';
                            echo '</form>';
                            echo '<form action="" method="POST" class="d-inline">';
                                echo '<input type="hidden" name="id" value='.$row["pid"].'> 
                                <button type="submit" class="btn btn-info mr-3" name="Delete" 
                                value="Delete"><i class="far fa-trash-alt"> </i></button>';
                            echo '</form>';
                            echo '<form action="sellproduct.php" method="POST" class="d-inline">';
                            echo '<input type="hidden" name="id" value='.$row["pid"].'> 
                            <button type="submit" class="btn btn-warning mr-3" name="issue" 
                            value="Issue"><i class="fas fa-handshake"> </i></button>';
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
        $sql = "DELETE FROM assets_tb WHERE pid = {$_REQUEST['id']}";
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
    <a href="addproduct.php" class="btn btn-danger">
    <i class="fas fa-plus fa-2x">
    </i></a>
</div>


<?php

include('includes/footer.php');
?>