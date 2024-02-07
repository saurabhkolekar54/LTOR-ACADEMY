<?php
require 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentId = $_POST['studentId'];
    $studentName = $_POST['studentName'];
    $totalFee = $_POST['totalFee'];
    $firstInstallment = $_POST['firstInstallment'];
    $secondInstallment = $_POST['secondInstallment'];
    $thirdInstallment = $_POST['thirdInstallment'];
    $balanceAmount = $_POST['balanceAmount'];

    $sql = "INSERT INTO studentfee VALUES ('$studentId', '$studentName', '$totalFee', '$firstInstallment', '$secondInstallment', '$thirdInstallment', '$balanceAmount')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
         <div class="container mt-4">
                <h2 class="text-center">Manage Student Fees</h2>
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="studentId">Student ID:</label>
                            <input type="text" class="form-control" id="studentId" name="studentId" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="studentName">Student Name:</label>
                            <input type="text" class="form-control" id="studentName" name="studentName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="totalFee">Total Fee:</label>
                            <input type="number" class="form-control" id="totalFee" name="totalFee" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="firstInstallment">1st Installment:</label>
                            <input type="number" class="form-control" id="firstInstallment" name="firstInstallment" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="secondInstallment">2nd Installment:</label>
                            <input type="number" class="form-control" id="secondInstallment" name="secondInstallment" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="thirdInstallment">3rd Installment:</label>
                            <input type="number" class="form-control" id="thirdInstallment" name="thirdInstallment" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="balanceAmount">Balance Amount:</label>
                        <input type="number" class="form-control" id="balanceAmount" name="balanceAmount" required>
                    </div>

                    <button type="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4" style="width: 200px;">Submit</button>
                </form>
            </div>
        </div>
</div>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="custom.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(".xp-menubar").on('click', function () {
                    $("#sidebar").toggleClass('active');
                    $("#content").toggleClass('active');
                });

                $('.xp-menubar, .body-overlay').on('click', function () {
                    $("#sidebar, .body-overlay").toggleClass('show-nav');
                });
            });
        </script>
    </div>
</body>

</html>
