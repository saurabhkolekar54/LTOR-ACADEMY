<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $memberName = $_POST['memberName'];
    $memberRole = $_POST['memberRole'];

    // File upload handling
    $targetDirectory = "image/";
    $memberImage = $targetDirectory . basename($_FILES['memberImage']['name']);
    move_uploaded_file($_FILES['memberImage']['tmp_name'], $memberImage);

    // Set default status to 1 (enable)
    $status = 1;

    // Perform SQL query to insert data into the database
    $sql = "INSERT INTO team_members (name, role, image, status) VALUES ('$memberName', '$memberRole', '$memberImage', '$status')";

    if ($con->query($sql) === TRUE) {
        header('Location: teammembers.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Team Members
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

	
	
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  



<div class="wrapper">


<div class="body-overlay"></div>
        <?php require 'sidebar.php'?>
        <!-- Page Content  -->
        <div id="content" style="background-color:white;">
		
		<div class="top-navbar">
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">person</span>
								</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>
			
			
			<div class="main-content">
            <section class="add-team-member">
                <div class="container">
                    <h2 class="text-center">Add Team Member</h2>
                    <form id="addTeamMemberForm" action="teammembers.php" method="post" enctype="multipart/form-data" class="mb-5">
                        <div class="form-row align-items-center">
                            <div class="form-group col-md-4">
                                <label for="memberName">Name:</label>
                                <input type="text" class="form-control" id="memberName" name="memberName" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="memberRole">Role:</label>
                                <input type="text" class="form-control" id="memberRole" name="memberRole" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="memberImage">Upload Image:</label>
                                <div class="border p-1" style="border-radius:5px;">
                                    <input type="file" class="form-control-file" id="memberImage" name="memberImage"
                                        accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="submit" name="submit" class="btn btn-primary mt-4" value="Add">
                            </div>
                        </div>
                    </form>

                    <table class="table table-striped table-bordered mt-10" id="myTable">
  <thead>
                    <tr >
                        <th class='text-center'>Name</th>
                        <th class='text-center'>Role</th>
                        <th class='text-center'>Image</th>
                        <th class='text-center'>Status</th>
                        <th class='text-center'>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM team_members";
                $result = $con->query($sql);
                            
                // Check if the query was successful
                if ($result) {
                        while ($row = $result->fetch_assoc()) {
                        $srno=$row['id'];
                        echo "<tr class='text-center'><td>" . $row['member_name'] . "</td><td>" . $row['member_role'] . "</td><td><img src='" . $row['member_image'] . "' width='100' height='100'></td>";
                        $status = $row['status'];
                        echo '<td>
                        <input type="checkbox" id="statusSwitch' . $row['id'] . '" data-toggle="toggle" ' . ($row['status'] == 1 ? 'checked' : '') . ' onchange="toggleStatus(' . $row['id'] . ', this.checked)">
                      </td>';
                
                // JavaScript function to handle the toggle and redirect
                echo '<script>
                        function toggleStatus(memberId, isChecked) {
                            var status = isChecked ? 1 : 0;
                            window.location.href = "TeamStatus.php?id=" + memberId + "&status=" + status;
                        }
                      </script>';
                       echo "<td><a href='UpdateTeamMember.php?updateid=$srno' class='btn btn-primary text-light'>Update</a></td>";

                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
                ?>
</tbody>
            </table>

                </div>
            </section>
			
			</div>
        </div>
    </div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });

   
        $(document).ready(function() {
        $("#myTable").dataTable();
    });
</script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
    </script>
  </body>
  
  </html>