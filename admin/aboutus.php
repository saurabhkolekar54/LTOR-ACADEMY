
<?php
require 'connection.php';
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $aboutUsText = $_POST['aboutustext']; // Assuming the textarea has name="aboutustext"
    $aboutUsImage = $_FILES['aboutusimage']['name']; // Assuming the file input has name="aboutusimage"

    // Move uploaded file to a specific directory (you may want to adjust the path)
    $uploadDirectory = "image/";
    $uploadedFilePath = $uploadDirectory . basename($aboutUsImage);

    move_uploaded_file($_FILES['aboutusimage']['tmp_name'], $uploadedFilePath);

    // Perform SQL query to insert data into the database
    $sql = "INSERT INTO about_us (about_us_text, about_us_image) VALUES ('$aboutUsText', '$uploadedFilePath')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header('Location: aboutus.php');

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        header('Location: aboutus.php');

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php include('dashboard.php');?>
        <div id="content" style="margin-top:80px">
            <div class="container mt-5">
                <!-- About Us Section -->
                <div class="about-us-section">
                    <form id="updateAboutUsForm" action="" method="post"
                        enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-row align-items-center">
                            <div class="form-group col-md-5">
                                <label for="aboutustext">About Us Text:</label>
                                <textarea class="form-control" id="aboutustext" name="aboutustext" rows="2"
                                    required></textarea>
                            </div>
                            <div class="form-group col-md-5" style="margin-top:-20px;">
                                <label for="aboutusimage">About Image:</label>
                                <div class="border p-1" style="border-radius: 5px;">
                                    <input type="file" class="form-control-file" id="aboutusimage" name="aboutusimage"
                                        accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="submit" class="btn btn-primary mt-3" value="Update">
                            </div>
                        </div>
                    </form>
                    <table id="dataTable" class="table mt-4">
                        <thead>
                            <tr>
                                <th>About Us Text</th>
                                <th>About Image</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                            // Perform SQL query to fetch data from the database
                                $sql = "SELECT about_us_text, about_us_image FROM about_us";
                                $result = $con->query($sql);

                                // Check if the query was successful
                                if ($result) {
                                    // Fetch data and display it in the table
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td width='700'>" . $row['about_us_text'] . "</td>";
                                        echo "<td><img src='" . $row['about_us_image'] . "' width='100' height='100'></td>"; // Assuming image path is stored in the database
                                        echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }

                        
                        ?><!-- Data will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Your existing scripts go here -->

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

            $('.xp-menubar, .body-overlay').on('click', function() {
                $("#sidebar, .body-overlay").toggleClass('show-nav');
            });

            // Update file input label when a file is selected
            $('#aboutImage').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName);
            });

        });

        $(document).ready(function() {
            $("#myTable").dataTable();
        });
        </script>

        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</body>

</html>