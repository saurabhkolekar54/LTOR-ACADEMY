<?php
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $eventTitle = $_POST['eventTitle'];
    $eventDate = $_POST['eventDate'];
    $eventLocation = $_POST['eventLocation'];

    // Use prepared statement to avoid SQL injection
    $sql = "INSERT INTO events (event_title, event_date, event_location) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $eventTitle, $eventDate, $eventLocation);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $eventId = mysqli_insert_id($con); // Get the last inserted ID

            // Upload event images
            for ($i = 1; $i <= 5; $i++) {
                $imageFieldName = "eventImage" . $i;
                if (!empty($_FILES[$imageFieldName]['name'])) {
                    $targetDir = "event_images/";
                    $targetFilePath = $targetDir . basename($_FILES[$imageFieldName]['name']);
                    move_uploaded_file($_FILES[$imageFieldName]['tmp_name'], $targetFilePath);

                    // Update the database with the image path
                    $updateImageQuery = "UPDATE events SET $imageFieldName = ? WHERE event_id = ?";
                    $stmtImage = mysqli_prepare($con, $updateImageQuery);

                    if ($stmtImage) {
                        mysqli_stmt_bind_param($stmtImage, "si", $targetFilePath, $eventId);
                        mysqli_stmt_execute($stmtImage);
                        mysqli_stmt_close($stmtImage);
                    } else {
                        echo "Error preparing image statement: " . mysqli_error($con);
                    }
                }
            }

            echo "<script>alert('Event added successfully.')</script>";
        } else {
            echo "Error executing statement: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testimonials</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <?php require 'sidebar.php'?>
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
                <section class="add-team-member">
                    <div class="container">
                        <h2 class="text-center">Add Testimonials</h2>
                        <form id="addEventForm" action="events.php" method="post" class="mb-5"
                            enctype="multipart/form-data">
                            <div class="form-row mt-3">
                                <div class="form-group col-md-6">
                                    <label for="eventTitle">Event Title:</label>
                                    <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="eventDate">Event Date:</label>
                                    <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="eventLocation">Event Location:</label>
                                    <input type="text" class="form-control" id="eventLocation" name="eventLocation"
                                        required>
                                </div>
                                <!-- Allow users to upload up to 5 images -->
                                <div class="form-group col-md-6">
                                    <label for="eventImages">Event Images (up to 5):</label>
                                    <div class="border" style="border-radius: 5px; padding: 5px;">
                                        <input type="file" class="form-control-file" id="eventImages"
                                            name="eventImages[]" accept="image/*" multiple>
                                        <small class="text-muted">You can select multiple images by holding down the
                                            Ctrl (Windows) or Command (Mac) key.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary mt-2" value="Add Event">
                                </div>
                            </div>
                        </form>


                        <!-- <table class="table table-striped table-bordered mt-10" id="myTable">
                            <thead>
                                <tr>
                                <th>Student Image</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Testimonial</th>
                                    <th>Enable / Disable</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                             
                            </tbody>
                        </table> -->
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS, and finally DataTables JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function() {
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