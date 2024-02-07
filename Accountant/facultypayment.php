<?php
require 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $facultyId = $_POST['facultyId'];
    $paymentId = $_POST['paymentId'];
    $workingDays = $_POST['workingDays'];
    $leaveAllowed = $_POST['leaveAllowed'];
    $absentDays = $_POST['absentDays'];
    $paymentCut = $_POST['paymentCut'];
    $facultyAttendance = $_POST['facultyAttendance'];
    $totalPayment = $_POST['totalPayment'];

    $sql = "INSERT INTO facultypayments (t_facultyid, t_paymentid, t_workingdays, t_leaveallowed, t_absentday, t_paymentcutted, t_attendance, t_totalpayment) 
            VALUES ('$facultyId', '$paymentId', '$workingDays', '$leaveAllowed', '$absentDays', '$paymentCut', '$facultyAttendance', '$totalPayment')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment record added successfully.";
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
       <div class="container mt-4  ">
            <h2 style="text-align:Center">Faculty Payment</h2>
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="facultyId" " >Faculty ID:</label>
                            <input type="text" class="form-control" id="facultyId" name="facultyId" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="paymentId">Payment ID:</label>
                            <input type="text" class="form-control" id="paymentId" name="paymentId" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="workingDays">Working Days:</label>
                            <input type="number" class="form-control" id="workingDays" name="workingDays" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="leaveAllowed">Leave Allowed:</label>
                            <input type="number" class="form-control" id="leaveAllowed" name="leaveAllowed" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="absentDays">Absent Days:</label>
                            <input type="number" class="form-control" id="absentDays" name="absentDays" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="paymentCut">Payment Cut:</label>
                            <input type="number" class="form-control" id="paymentCut" name="paymentCut" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="facultyAttendance">Faculty Attendance (%):</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="facultyAttendance"
                                    name="facultyAttendance" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="totalPayment">Total Payment:</label>
                            <input type="number" class="form-control" id="totalPayment" name="totalPayment" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4" style="width: 200px;">Make
                        Payment</button>
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
            // Your existing JavaScript code remains unchanged
        </script>
    </div>
</body>

</html>
