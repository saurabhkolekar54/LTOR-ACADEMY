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
              <th scope="col">Student Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Gender</th>
              <th scope="col">Course Id</th>
              <th scope="col">Batch Id</th>
              <th scope="col">Franchise Id</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require 'connection.php';
            $sql = "select * from studentinfo";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $name = $row['t_name'];
                $email = $row['t_email'];
                $contact = $row['t_contact'];
                $gender = $row['t_gender'];
                $courseId = $row['t_courseid'];
                $batchId = $row['t_batchid'];
                $franchiseId = $row['t_franchiseid'];
                echo '<tr>
                <th scope="row">' . $srno . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $contact . '</td>
                <td>' . $gender . '</td>
                <td>' . $courseId . '</td>
                <td>' . $batchId . '</td>
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

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="mt-4" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <!-- Student ID -->
                <div class="form-group col-md-6">
                  <label for="studentId" class="form-label">Student ID</label>
                  <input type="text" class="form-control" name="studentId" id="studentId" placeholder="Enter Student ID" required>
                </div>

                <!-- Name -->
                <div class="form-group col-md-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="form-row">
                <!-- Email -->
                <div class="form-group col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                  <div class="invalid-feedback" id="emailFeedback">
                    Please enter a valid email address in the format test@gmail.com.
                  </div>
                </div>

                <!-- Contact -->
                <div class="form-group col-md-6">
                  <label for="contact" class="form-label">Contact</label>
                  <input type="tel" class="form-control" name="contact" id="contact" placeholder="Enter Contact" pattern="[0-9]{10}" required>
                  <div class="invalid-feedback" id="contactFeedback">
                    Please enter a valid 10-digit contact number.
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label d-block">Gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked required>
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                  <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                  <label class="form-check-label" for="other">Other</label>
                </div>
              </div>
              <div class="form-row">
                <!-- Course ID -->
                <div class="form-group col-md-4">
                  <label for="courseId" class="form-label">Course ID</label>
                  <input type="text" class="form-control" name="courseId" id="courseId" placeholder="Enter Course ID" required>
                </div>

                <!-- Batch No -->
                <div class="form-group col-md-4">
                  <label for="batchNo" class="form-label">Batch No</label>
                  <input type="text" class="form-control" name="batchNo" id="batchNo" placeholder="Enter Batch No" required>
                </div>

                <!-- Franchise ID -->
                <div class="form-group col-md-4">
                  <label for="franchiseId" class="form-label">Franchise ID</label>
                  <input type="text" class="form-control" name="franchiseId" id="franchiseId" placeholder="Enter Franchise ID" required>
                </div>
              </div>
              <!-- <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Update Student</button> -->

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
          </div>
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
      $("#myTable").dataTable();
    });
  </script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
  </script>
</body>

</html>