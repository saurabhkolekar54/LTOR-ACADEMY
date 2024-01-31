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
              <th scope="col">Faculty Id</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Contact</th>
              <th scope="col">DateofBirth</th>
              <th scope="col">Experience</th>
              <th scope="col">Skill1</th>
              <th scope="col">Skill2</th>
              <th scope="col">Skill3</th>
              <th scope="col">Achievement1</th>
              <th scope="col">Achievement2</th>
              <th scope="col">Achievement3</th>
              <th scope="col">Maximum Students</th>
              <th scope="col">Education</th>
              <th scope="col">Qualification</th>
              <th scope="col">FranchiseId</th>
              <th scope="col">Operation</th>

            </tr>
          </thead>
          <tbody>
            <?php
            require 'connection.php';
            $sql = "select * from facultyinfo";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $name = $row['t_name'];
                $gender = $row['t_gender'];
                $contact = $row['t_contact'];
                $dob = $row['t_dob'];
                $experience = $row['t_experienceyear'];
                $skill1 = $row['t_skills1'];
                $skill2 = $row['t_skills2'];
                $skill3 = $row['t_skills3'];
                $achievement1 = $row['t_achievement1'];
                $achievement2 = $row['t_achievement2'];
                $achievement3 = $row['t_achievement3'];
                $maximumStudents = $row['t_maximumstudent'];
                $education = $row['t_education'];
                $qualification = $row['t_qualification'];
                $franchiseId = $row['t_franchiseid'];
                echo '<tr>
                <th scope="row">' . $srno . '</th>
                <td>' . $name . '</td>
                <td>' . $gender . '</td>
                <td>' . $contact . '</td>
                <td>' . $dob . '</td>
                <td>' . $experience . '</td>
                <td>' . $skill1 . '</td>
                <td>' . $skill2 . '</td>
                <td>' . $skill3 . '</td>
                <td>' . $achievement1 . '</td>
                <td>' . $achievement2 . '</td>
                <td>' . $achievement3 . '</td>
                <td>' . $maximumStudents . '</td>
                <td>' . $education . '</td>
                <td>' . $qualification . '</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Update Faculty</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="mt-4" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="facultyId">Faculty ID:</label>
                  <input type="text" class="form-control" id="facultyId" name="facultyId" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="facultyName">Name:</label>
                  <input type="text" class="form-control" id="facultyName" name="facultyName" required>
                </div>
              </div>

              <div class="form-row align-items-center">
                <!-- Gender -->
                <div class="form-group col-md-6 mb-3">
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

                <!-- Contact Number -->
                <div class="form-group col-md-6 mb-3">
                  <label for="contactNumber">Contact Number:</label>
                  <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required>
                </div>
              </div>

              <div class="form-row">
                <!-- Date of Birth -->
                <div class="form-group col-md-6 mb-3">
                  <label for="dob">Date of Birth:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <!-- Experience -->
                <div class="form-group col-md-6 mb-3">
                  <label for="Experience">Experience:</label>
                  <select class="form-control" id="Experience" name="Experience" required>
                    <option value="fresher">Fresher</option>
                    <option value="6 Month">6 Month</option>
                    <option value="1 Year">1 Year</option>
                    <option value="3 Year">3 Year</option>
                    <option value="8 Year">8 Year</option>
                    <option value="6 Year">6 Year</option>
                  </select>
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="Skill1">Skill1:</label>
                  <input type="text" class="form-control" id="Skill1" name="Skill1" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="Skill2">Skill2:</label>
                  <input type="text" class="form-control" id="Skill2" name="Skill2" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="Skill3">Skill3:</label>
                  <input type="text" class="form-control" id="Skill3" name="Skill3" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="Achievement1">Achievement1:</label>
                  <input type="text" class="form-control" id="Achievement1" name="Achievement1" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="Achievement2">Achievement2:</label>
                  <input type="text" class="form-control" id="Achievement2" name="Achievement2" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="Achievement3">Achievement3:</label>
                  <input type="text" class="form-control" id="Achievement3" name="Achievement3" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Education">Education:</label>
                  <select class="form-control" id="Education" name="Education" required>
                    <option value="B.E">B.E</option>
                    <option value="B.A.">B.A.</option>
                    <option value="B.Sc.">B.Sc.</option>
                    <option value="B.Ed.">B.Ed.</option>
                    <option value="B.Sc.-B.Ed.">B.Sc.-B.Ed.</option>
                    <option value="M.A.">M.A.</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="qualification">Qualification:</label>
                  <select class="form-control" id="qualification" name="qualification" required>
                    <option value="B.E (Computer Engg)">B.E (Computer Engg)</option>
                    <option value="B.A. (Bachelor of Arts)">B.A. (Bachelor of Arts)</option>
                    <option value="B.Sc. (Bachelor of Science)">B.Sc. (Bachelor of Science)</option>
                    <option value="B.Ed. (Bachelor of Education)">B.Ed. (Bachelor of Education)</option>
                    <option value="B.Sc.-B.Ed. Integrated Course">B.Sc.-B.Ed. Integrated Course</option>
                    <option value="M.A. in English*">M.A. in English*</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="maxStudentsHandled">Maximum Students Handled:</label>
                  <input type="number" class="form-control" id="maxStudentsHandled" name="maxStudentsHandled" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="Franchiseid">Franchise Id</label>
                  <input type="number" class="form-control" id="Franchiseid" name="Franchiseid" required>
                </div>
              </div>
              <!-- <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Update Faculty</button> -->
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