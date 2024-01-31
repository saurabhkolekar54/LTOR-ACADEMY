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
              <th scope="col">Course Id</th>
              <th scope="col">Course Name</th>
              <th scope="col">Course Duration</th>
              <th scope="col">Course Members</th>
              <th scope="col">Course Image</th>
              <th scope="col">Course Syllabus</th>
              <th scope="col">Course Mode</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require 'connection.php';
            $sql = "select * from course";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $name = $row['t_name'];
                $class = $row['t_duration'];
                $members = $row['t_member'];
                $image = $row['t_image'];
                $syllabus = $row['t_syllabus'];
                $mode = $row['t_mode'];
                echo '<tr>
                <th scope="row">' . $srno . '</th>
                <td>' . $name . '</td>
                <td>' . $class . '</td>
                <td>' . $members . '</td>
                <td><img src="image/' . $image . '" width="100" height="100"></td>
                <td>' . $syllabus . '</td>
                <td>' . $mode . '</td>
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
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="mt-4" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="courseId">Course ID:</label>
                  <input type="text" class="form-control" id="courseId" name="courseId" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="courseName">Course Name:</label>
                  <select class="form-control" id="courseName" name="courseName" required>
                    <option value="Spoken English">Spoken English</option>
                    <option value="Public Speaking">Public Speaking</option>
                    <!-- Add other options as needed -->
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="courseMembers">Course Members:</label>
                  <input type="number" class="form-control" id="courseMembers" name="courseMembers" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="courseDuration">Course Duration:</label>
                  <select class="form-control" id="courseDuration" name="courseDuration" required>
                    <option value="1 Month">1 Month</option>
                    <option value="2 Month">2 Month</option>
                    <!-- Add other options as needed -->
                  </select>
                </div>
              </div>

              <div class="form-row">
                <!-- Course Syllabus -->
                <div class="form-group col-md-6">
                  <label for="courseSyllabus" style="border-radius:5px;">Course Syllabus:</label>
                  <div class="border p-1">
                    <input type="file" class="form-control-file" id="courseSyllabus" name="courseSyllabus">
                  </div>
                </div>

                <!-- Course Image -->
                <div class="form-group col-md-6">
                  <label for="courseImage">Course Image:</label>
                  <div class="border p-1" style="border-radius:5px;">
                    <input type="file" class="form-control-file" id="courseImage" name="courseImage" accept="image/*" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="courseMode">Course Mode:</label>
                <select class="form-control" id="courseMode" name="courseMode" required>
                  <option value="online">Online</option>
                  <option value="offline">Offline</option>
                </select>
              </div>

              <!-- <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Update Course</button> -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
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