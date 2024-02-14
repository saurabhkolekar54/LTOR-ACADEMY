<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve the 'updateid' from the query string
    $Id = $_GET['updateid'] ?? '';

    // Check if the ID is valid
    if (!is_numeric($Id)) {
        // echo "Invalid ID";
        exit;
    }

    // Construct and execute the SQL query to fetch the record
    $sql = "SELECT * FROM `course` WHERE t_id = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $Id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Fetch the record
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            echo "Record not found";
            exit;
        }

        $srno = $row['t_id'];
        $name = $row['t_name'];
        $class = $row['t_duration'];
        $members = $row['t_member'];
        $image = $row['t_image'];
        $syllabus = $row['t_syllabus'];
        $mode = $row['t_mode'];
    } else {
        echo "Error: " . mysqli_error($con);
        exit;
    }
}

if (isset($_POST['submit'])) {
    // Handle form submission
    $courseId = $_POST['courseId'];
    $courseName = $_POST['courseName'];
    $courseMembers = $_POST['courseMembers'];
    $courseDuration = $_POST['courseDuration'];
    $courseMode = $_POST['courseMode'];
    $Id = $_POST['updateid'] ?? '';

    // Retain existing syllabus and image values if new files are not uploaded
    $syllabusFileName = !empty($_FILES['courseSyllabus']['name']) ? $_FILES['courseSyllabus']['name'] : $syllabus;
    $imageFileName = !empty($_FILES['courseImage']['name']) ? $_FILES['courseImage']['name'] : $image;

    // Process syllabus file upload
    if (!empty($_FILES['courseSyllabus']['name'])) {
        $syllabusTempName = $_FILES['courseSyllabus']['tmp_name'];
        move_uploaded_file($syllabusTempName, 'syllabus/' . $syllabusFileName);
    }

    // Process image file upload
    if (!empty($_FILES['courseImage']['name'])) {
        $imageTempName = $_FILES['courseImage']['tmp_name'];
        move_uploaded_file($imageTempName, 'image/' . $imageFileName);
    }

    // Use prepared statements to update the record
    $sql = "UPDATE course 
    SET t_name = ?, 
        t_member = ?, 
        t_duration = ?, 
        t_mode = ?, 
        t_syllabus = ?, 
        t_image = ?
    WHERE t_id = ?";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sissssi", $courseName, $courseMembers, $courseDuration, $courseMode, $syllabusFileName, $imageFileName, $courseId);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Data updated successfully
            header('location: viewcourses.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Error: " . mysqli_error($con);
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
                <div class="container card shadow p-3 bg-white rounded">
                    <h2 class="text-center">Update Course</h2>
                    <form class="mt-4" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="courseId">Course ID:</label>
                                <input type="text" class="form-control" id="courseId" name="courseId"
                                    value="<?php echo $srno; ?>" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="courseName">Course Name:</label>
                                <input type="text" class="form-control" id="courseName" name="courseName"
                                    value="<?php echo $name; ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="courseMembers">Course Members:</label>
                                <input type="number" class="form-control" id="courseMembers"
                                    value="<?php echo $members; ?>" name="courseMembers" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="courseDuration">Course Duration:</label>
                                <select class="form-control" id="courseDuration" name="courseDuration"
                                    value="<?php echo $class; ?>" required>
                                    <option value="1 Month">1 Month</option>
                                    <option value="2 Month">2 Month</option>
                                    <option value="3 Month">3 Month</option>
                                    <option value="4 Month">4 Month</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Course Syllabus -->
                            <div class="form-group col-md-6">
                                <label for="currentCourseSyllabus">Current Course Syllabus:</label>
                                <div class="border p-1">
                                    <?php if (!empty($syllabus)) : ?>
                                    <p>
                                        <strong>Current Syllabus:</strong>
                                        <a href="path_to_your_syllabus_folder/<?php echo $syllabus; ?>"
                                            target="_blank"><?php echo $syllabus; ?></a>
                                    </p>
                                    <?php else : ?>
                                    <p>No syllabus available</p>
                                    <label for="courseSyllabus">Upload Syllabus:</label>
                                    <?php endif; ?>
                                    <div class="border p-1">
                                        <input type="file" class="form-control-file" id="courseSyllabus"
                                            name="courseSyllabus">
                                    </div>
                                </div>
                            </div>

                            <!-- Course Image -->
                            <div class="form-group col-md-6">
                                <div class="border p-1" style="border-radius:5px;">
                                    <label for="courseImage">Upload Image:</label>
                                    <div class="border p-1" style="border-radius: 5px;">
                                        <img src="/admin/image/<?php echo $image; ?>" alt="Member Image"
                                            style="max-width: 100px; max-height: 100px;">
                                        <input type="file" class="form-control-file" id="courseImage" name="courseImage"
                                            accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="courseMode">Course Mode:</label>
                                <select class="form-control" id="courseMode" name="courseMode" required>
                                    <option value="online" <?php echo ($mode === 'online') ? 'selected' : ''; ?>>Online
                                    </option>
                                    <option value="offline" <?php echo ($mode === 'offline') ? 'selected' : ''; ?>>
                                        Offline</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="updateid" value="<?php echo $srno; ?>">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4"
                            style="width: 200px;">Update Course</button>
                    </form>
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