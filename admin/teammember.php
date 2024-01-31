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

    // Perform SQL query to insert data into the database
    $sql = "INSERT INTO team_members (name, role, image) VALUES ('$memberName', '$memberRole', '$memberImage')";

    if ($con->query($sql) === TRUE) {
        header('Location: teammember.php');


    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
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
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS3 -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php include('dashboard.php'); ?>

        <!-- Form for Adding Team Members -->
        <div id="content" style="margin-top:80px">
            <section class="add-team-member">
                <div class="container">
                    <h2 class="text-center mt-3">Add Team Member</h2>
                    <form id="addTeamMemberForm" action="teammember.php" method="post" enctype="multipart/form-data">
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
                                <input type="submit" name="submit" class="btn btn-primary mt-4" value="Update">
                            </div>
                        </div>
                    </form>

                    <table id="teamMembersTable" class="table mt-4">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Image</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM team_members";
                            $result = $con->query($sql);
                            
                            // Check if the query was successful
                            if ($result) {
                                // Fetch data and display it in the table
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['role'] . "</td>";
                                    echo "<td><img src='" . $row['image'] . "' width='100' height='100'></td>"; // Assuming image path is stored in the database
                                    echo "<td><button class='btn btn-primary' onclick='editMember(" . $row['id'] . ")'>Edit</button></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
                            
                            ?><!-- Data will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </section>
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