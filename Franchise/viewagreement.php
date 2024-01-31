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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <?php include('dashboard.php'); ?>
        <div id="content" style="margin-top:100px">
            <div class="container mt-5">
                <table class="table table-striped table-bordered mt-10" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Agreement Id</th>
                            <th scope="col">Party A Name</th>
                            <th scope="col">Party B Name</th>
                            <th scope="col">Agreement Copy</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Fee Of Joining</th>
                            <th scope="col">Revenue A Percentage</th>
                            <th scope="col">Revenue B Percentage</th>
                            <th scope="col">Revenue Date</th>
                            <!-- <th scope="col">Party B Name</th> -->
                            <th scope="col">Party B Contact</th>
                            <th scope="col">Party B Email</th>
                            <th scope="col">Party B Photo</th>
                            <th scope="col">Franchiseid</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            require 'connection.php';
            $sql = "select * from agreementdetails";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $partyAName = $row['t_partyaname'];
                $partyBName = $row['t_partybname'];
                $agreementCopy = $row['t_agreementcopypdf'];
                $startDate = $row['t_startdate'];
                $endDate = $row['t_enddate'];
                $feeOfJoining = $row['t_feeofjoining'];
                $revenueAPercentage = $row['t_revenueofA'];
                $revenueBPercentage = $row['t_revenueofB'];
                $renewalDate = $row['t_renewaldate'];
                $partyBContact = $row['t_partybcontact'];
                $partyBEmail = $row['t_partybemail'];
                $partyBPhoto = $row['t_partybphoto'];
                $franchiseId = $row['t_franchiseid'];

                echo '<tr>
        <th scope="row">' . $srno . '</th>
        <td>' . $partyAName . '</td>
        <td>' . $partyBName . '</td>
        <td>' . $agreementCopy . '</td>
        <td>' . $startDate . '</td>
        <td>' . $endDate . '</td>
        <td>' . $feeOfJoining . '</td>
        <td>' . $revenueAPercentage . '</td>
        <td>' . $revenueBPercentage . '</td>
        <td>' . $renewalDate . '</td>
        <td>' . $partyBContact . '</td>
        <td>' . $partyBEmail . '</td>
        <td>' . $partyBPhoto . '</td>
        <td>' . $franchiseId . '</td>
        </tr>';
              }
            }
            ?>
                    </tbody>
                </table>
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

    $(document).ready(function() {
        $("#myTable").dataTable();
    });
    </script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
    </script>
</body>

</html>