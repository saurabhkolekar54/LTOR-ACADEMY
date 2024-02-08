<?php
include 'connection.php';

$Id = $_GET['updateid'] ?? '';

// Check if the ID is valid
if (!is_numeric($Id)) {
    // echo "Invalid ID";
    exit;
}
// Retrieve current About Us content from the database
$sql = "SELECT * FROM about_us WHERE id ='$Id' "; // Assuming id 1 is used for About Us content
$result = mysqli_query($con, $sql);

// Check if there is any data available
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $aboutUsText = $row['about_us_text'];
    $aboutUsImage = $row['about_us_image'];
} else {
    $aboutUsText = '';
    $aboutUsImage = '';
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['update'])) {
    // Retrieve and sanitize form data
    $aboutUsText = mysqli_real_escape_string($con, $_POST['aboutustext']);

    // Check if image file is uploaded
    if (isset($_FILES['aboutusimage']) && $_FILES['aboutusimage']['error'] === UPLOAD_ERR_OK) {
        $aboutUsImage = $_FILES['aboutusimage']['name'];
        $aboutUsImageTmp = $_FILES['aboutusimage']['tmp_name'];
        $uploadDir = 'upload/'; // Define upload directory
        $uploadPath = $uploadDir . $aboutUsImage;

        // Move uploaded image to upload directory
        if (move_uploaded_file($aboutUsImageTmp, $uploadPath)) {
            // Construct and execute SQL query to update About Us content
            $sql = "UPDATE about_us SET about_us_text = '$aboutUsText', about_us_image = '$uploadPath' WHERE id ='$Id' "; // Assuming id 1 is used for About Us content
            if (mysqli_query($con, $sql)) {
                echo "About Us content updated successfully.";
                header('location: aboutus.php');

            } else {
                echo "Error updating About Us content: " . mysqli_error($con);
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Please select an image file.";
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
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

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
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>
                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
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
                <div class="container">
                    <h2 class="text-center">Update About Us</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <form id="updateAboutUsForm" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="aboutustext">About Us Text:</label>
                                    <textarea class="form-control" id="aboutustext" name="aboutustext" rows="5"
                                        required><?php echo $aboutUsText; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="aboutusimage">About Image:</label>
                                    <div class="border p-1" style="border-radius: 5px;">
                                        <img src="<?php echo $aboutUsImage; ?>" alt="About Us Image"
                                            style="max-width: 100px; max-height: 100px;">
                                        <input type="file" class="form-control-file mt-2" id="aboutusimage"
                                            name="aboutusimage" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary mt-3" name="update" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".xp-menubar").on('click', function() {
            $("#sidebar").toggleClass('active');
            $("#content").toggleClass('active');
        });

        $('.xp-menubar,.body-overlay').on('click', function() {
            $("#sidebar,.body-overlay").toggleClass('show-nav');
        });

    });
    </script>
</body>

</html>