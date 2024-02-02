<?php
    require 'connection.php';

    // Check if the form is submitted
    if (isset($_POST['addGallery'])) {
        // Check connection
        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve data from the form
        $description = mysqli_real_escape_string($con, $_POST['Description']);

        // Upload image
        $uploadDirectory = "image/"; // Change this to your desired directory
        $galleryImage = $_FILES['galleryImage']['name'];
        $uploadedFilePath = $uploadDirectory . basename($galleryImage);
        move_uploaded_file($_FILES['galleryImage']['tmp_name'], $uploadedFilePath);

        // Perform SQL query to insert data into the database
        $sql = "INSERT INTO gallery (image_path, description) VALUES ('$uploadedFilePath', '$description')";

        if (mysqli_query($con, $sql)) {
            header('Location: gallery.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
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
        <title>Gallery</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
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
                    <h2 class="text-center mt-3">Add Image in Gallery</h2>
                    <form id="addTeamMemberForm" action="gallery.php" method="post" enctype="multipart/form-data">
                        <div class="form-row align-items-center">
                            <div class="form-group col-md-5">
                                <label for="galleryImage">Upload Image:</label>
                                <div class="border p-1" style="border-radius:5px;">
                                    <input type="file" class="form-control-file" id="galleryImage" name="galleryImage"
                                        accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="Description">Description:</label>
                                <input type="text" class="form-control" id="Description" name="Description" required>
                            </div>

                            <div class="form-group col-md-2">
                                <input type="submit" name="addGallery" class="btn btn-primary mt-4" value="Add">
                            </div>
                        </div>
                    </form>

                    <table id="galleryTable" class="table mt-4">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT image_path, description FROM gallery";
                                $result = mysqli_query($con, $sql);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch data and display it in the table
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td width='500'><img src='" . $row['image_path'] . "' width='200' height='200'></td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td><button class='btn btn-primary'>Edit</button></td>"; // Add your edit button
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
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

   
</script>
  
  </body>
  
  </html>


