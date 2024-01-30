<?php
include 'connection.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $batchId = $_POST['batchId'];
    $startDate = $_POST['startDate'];
    $duration = $_POST['duration'];
    $batchName = $_POST['batchName'];
    $endDate = $_POST['endDate'];  
    $mode = $_POST['mode'];  
    $batchcapacity = $_POST['batchcapacity'];
    $facultyName = $_POST['facultyName'];
    $Franchiseid = $_POST['Franchiseid'];

    // Use prepared statement to avoid SQL injection
    $sql = "INSERT INTO `batch` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssssi", $batchId, $batchName, $startDate, $endDate, $facultyName, $duration, $mode, $batchcapacity, $Franchiseid);

        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo '<div class="alert alert-success" role="alert">
                    <b>Your Record Submitted Successfully!</b>
                  </div>';
            echo '<script>
                    setTimeout(function() {
                        var alertDiv = document.querySelector(".alert");
                        if (alertDiv) {
                            alertDiv.style.display = "none";
                        }
                    }, 3000); // 5000 milliseconds = 5 seconds
                  </script>';
            header('location:addbatch.php');
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    <b>Error: ' . mysqli_error($con) . '</b>
                  </div>';
        }

        mysqli_stmt_close($stmt);
    } else {
        echo '<div class="alert alert-danger" role="alert">
                <b>Error in prepared statement: ' . mysqli_error($con) . '</b>
              </div>';
    }
}

// Close the database connection
mysqli_close($con);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin Panel</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
 <div class="wrapper">
    <?php include('dashboard.php');?>
	 
  <div id="content">
 
<div class="container" style="width: 900px; margin-top:100px">
  <h2 class="text-center" >Add Batch</h2>
  <form class="mt-4" method="POST" enctype="multipart/form-data">
      <div class="row">
            <div class="col-md-6">
                <!-- First Line -->
                <div class="form-group">
                    <label for="batchId">Batch ID:</label>
                    <input type="text" class="form-control" id="batchId" name="batchId" required>
                </div>
                <div class="form-group">
                    <label for="startDate">Starting Date:</label>
                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                </div>

                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <select class="form-control" id="duration" name="duration" required>
                        <option value="1 Month">1 Month</option>
                        <option value="2 Month">2 Month</option>
                        <option value="3 Month">3 Month</option>
                        <option value="4 Month">4 Month</option>
                        <option value="5 Month">5 Month</option>
                        <option value="6 Month">6 Month</option>
                        <option value="other">Other</option>
                    </select>
                </div>            
                <div class="form-group">
                <label for="facultyName">Faculty Name:</label>
                <input type="text" class="form-control" id="facultyName" name="facultyName" required>
                </div>
                <div class="form-group">
                <label for="courseMembers">Batch Capacity:</label>
                <input type="number" class="form-control" id="courseMembers" name="batchcapacity" required>
            </div>
            </div>

            <div class="col-md-6">
                <!-- Second Line -->
                <div class="form-group">
                    <label for="batchName">Batch Name:</label>
                    <input type="text" class="form-control" id="batchName" name="batchName" required>
                </div>

                <div class="form-group">
                    <label for="endDate">Ending Date:</label>
                    <input type="date" class="form-control" id="endDate" name="endDate" required>
                </div>

                <div class="form-group">
                    <label for="mode">Mode:</label>
                    <select class="form-control" id="mode" name="mode">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="Franchiseid">Franchise Id:</label>
                <input type="text" class="form-control" id="Franchiseid" name="Franchiseid" required>
                </div>
            </div>
   </div>
    <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Batch</button>
  </form>
</div>
	</div>
		
 </div>
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  </body>
  
  </html>


