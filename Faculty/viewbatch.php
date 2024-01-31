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
              <th scope="col">Batch Id</th>
              <th scope="col">Starting Date</th>
              <th scope="col">Duration</th>
              <th scope="col">Batch Name</th>
              <th scope="col">Ending Date</th>
              <th scope="col">Mode</th>
              <th scope="col">Batch Capacity</th>
              <th scope="col">Faculty Name</th>
              <th scope="col">Franchiseid</th>

            </tr>
          </thead>
          <tbody>
            <?php

            require 'connection.php';
            // Assuming $con is your database connection variable
            $sql = "select * from batch";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_no'];
                $name = $row['t_name'];
                $class = $row['t_startingdate'];
                $endingDate = $row['t_endingdate']; // Corrected variable names
                $facultyName = $row['t_facultyname']; // Corrected variable names
                $duration = $row['t_duration'];
                $mode = $row['t_mode'];
                $capacity = $row['t_capacity'];
                $franchiseId = $row['t_franchiseid'];
                echo '<tr>
              <th scope="row">' . $srno . '</th>
              <td>' . $name . '</td>
              <td>' . $class . '</td>
              <td>' . $endingDate . '</td>
              <td>' . $mode . '</td>
              <td>' . $duration . '</td>
              <td>' . $capacity . '</td>
              <td>' . $facultyName . '</td>
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