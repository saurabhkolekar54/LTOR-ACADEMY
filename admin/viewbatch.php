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
              <th scope="col">Operation</th>

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
              <td>
              <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button> &nbsp
             <button class="btn btn-danger btn-sm "><a href="delete.php?deleteid=' . $srno . '" class="text-light">Delete</a></button>
              </div>
          </td>
          
            </tr>';
              }
            }
            ?>

          </tbody>
        </table>
      </div>

    </div>

  </div>
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Batch</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mt-4" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <!-- First Line -->
                <div class="form-group">
                  <label for="batchId">Batch ID:</label>
                  <input type="text" class="form-control" id="batchId" name="batchId" required>
                </div>
                <div class="form-group">
                  <label for="startDate">Starting Date:</label>
                  <input type="date" class="form-control" id="startDate" name="startDate" required>
                </div>

                <div class="form-group">
                  <label for="duration">Duration:</label>
                  <select class="form-control" id="duration" name="duration" required>
                    <option value="1 Month">1 Month</option>
                    <option value="2 Month">2 Month</option>
                    <option value="3 Month">3 Month</option>
                    <option value="4 Month">4 Month</option>
                    <option value="5 Month">5 Month</option>
                    <option value="6 Month">6 Month</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="facultyName">Faculty Name:</label>
                  <input type="text" class="form-control" id="facultyName" name="facultyName" required>
                </div>
                <div class="form-group">
                  <label for="courseMembers">Batch Capacity:</label>
                  <input type="number" class="form-control" id="courseMembers" name="batchcapacity" required>
                </div>
              </div>

              <div class="col-md-6">
                <!-- Second Line -->
                <div class="form-group">
                  <label for="batchName">Batch Name:</label>
                  <input type="text" class="form-control" id="batchName" name="batchName" required>
                </div>

                <div class="form-group">
                  <label for="endDate">Ending Date:</label>
                  <input type="date" class="form-control" id="endDate" name="endDate" required>
                </div>

                <div class="form-group">
                  <label for="mode">Mode:</label>
                  <select class="form-control" id="mode" name="mode">
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Franchiseid">Franchise Id:</label>
                  <input type="text" class="form-control" id="Franchiseid" name="Franchiseid" required>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
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

    $(document).ready(function() {
      $("#myTable").dataTable();
    });
  </script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
  </script>
</body>

</html>