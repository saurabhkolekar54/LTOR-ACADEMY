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
                            <th scope="col">Franchise Id</th>
                            <th scope="col">Franchise Owner Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Image</th>
                            <th scope="col">Firm Name</th>
                            <th scope="col">State</th>
                            <th scope="col">District</th>
                            <th scope="col">Taluka</th>
                            <th scope="col">Location</th>
                            <th scope="col">Pincode</th>                        </tr>
                    </thead>
                    <tbody>
                        <?php
            require 'connection.php';
            $sql = "select * from franchise";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $name = $row['t_ownername'];
                $email = $row['t_email'];
                $contact = $row['t_contact'];
                $image = $row['t_image'];
                $firmName = $row['t_frimname'];
                $state = $row['t_state'];
                $district = $row['t_district'];
                $taluka = $row['t_taluka'];
                $location = $row['t_location'];
                $pincode = $row['t_pincode'];
                echo '<tr>
                <th scope="row">' . $srno . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $contact . '</td>
                <td>' . $image . '</td>
                <td>' . $firmName . '</td>
                <td>' . $state . '</td>
                <td>' . $district . '</td>
                <td>' . $taluka . '</td>
                <td>' . $location . '</td>
                <td>' . $pincode . '</td>
       
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