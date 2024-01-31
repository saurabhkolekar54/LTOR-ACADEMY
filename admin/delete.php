<?php
    include 'connection.php';

    if(isset($_GET['deleteid']))
    {
        $Id=$_GET['deleteid'];

        $sql="delete from `batch` where t_no=$Id";
        $result=mysqli_query($con,$sql);

        if($result)
        {
            // echo "Deleted successfully";
            header('location:viewbatch.php');
        }
        else
        {
            die(mysqli_error($con));
        }
    }
?>
