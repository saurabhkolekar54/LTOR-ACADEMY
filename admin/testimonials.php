<?php
require 'connection.php';

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Insert data into the database
if (isset($_POST['submit'])) {
    $studentName = $_POST['studentName'];
    $courseName = $_POST['courseName'];
    $testimonialText = $_POST['testimonialText'];

    $sql = "INSERT INTO testimonials (studentName, courseName, testimonialText) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $studentName, $courseName, $testimonialText);

    if ($stmt->execute()) {
        // Use JavaScript to display success message
        echo '<script>
                alert("Testimonial added successfully!");
              </script>';
    } else {
        echo '<script>
                alert("Error adding testimonial. Please try again.");
              </script>';
    }
}

// Update data in the database
if (isset($_POST['updatesubmit'])) {
    $testimonialId = $_POST['editTestimonialId'];
    $newStudentName = $_POST['editStudentName'];
    $newCourseName = $_POST['editCourseName'];
    $newTestimonialText = $_POST['editTestimonialText'];

    $sql = "UPDATE testimonials 
            SET studentName = ?, courseName = ?, testimonialText = ?
            WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssi", $newStudentName, $newCourseName, $newTestimonialText, $testimonialId);

    if ($stmt->execute()) {
        echo '<script>
                alert("Testimonial updated successfully!");
              </script>';
    } else {
        echo '<script>
                alert("Error updating testimonial. Please try again.");
              </script>';
    }

    $stmt->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testimonials</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <?php require 'sidebar.php'?>
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
                <section class="add-team-member">
                    <div class="container">
                        <h2 class="text-center mt-3">Add Testimonials</h2>
                        <form id="addTestimonialForm" action="testimonials.php" method="post" class="mb-5">
                            <div class="form-row mt-3">
                                <div class="form-group col-md-4">
                                    <label for="studentName">Name of Student:</label>
                                    <input type="text" class="form-control" id="studentName" name="studentName"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="courseName">Course Name:</label>
                                    <input type="text" class="form-control" id="courseName" name="courseName" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="testimonialText">Testimonial:</label>
                                    <textarea class="form-control" id="testimonialText" name="testimonialText" rows="1"
                                        required></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary mt-2"
                                        value="Add Testimonial">
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped table-bordered mt-10" id="myTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Testimonial</th>
                                    <th>Enable / Disable</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                               $sqlRetrieve = "SELECT * FROM testimonials";
                               $result = $con->query($sqlRetrieve);
                              
                               if ($result->num_rows > 0) {                           
                                   while ($row = $result->fetch_assoc()) {
                                    $status = $row['status'];
                                       echo '<tr>
                                               <td>' . $row['studentName'] . '</td>
                                               <td>' . $row['courseName'] . '</td>
                                               <td>' . $row['testimonialText'] . '</td>
                                               <td>
                                               <input type="checkbox" id="statusSwitch' . $row['id'] . '" data-toggle="toggle" ' . ($row['status'] == 1 ? 'checked' : '') . ' onchange="toggleStatus(' . $row['id'] . ', this.checked)">
                                             </td>';
                                       
                                           // JavaScript function to handle the toggle and redirect
                                           echo '<script>
                                                   function toggleStatus(memberId, isChecked) {
                                                       var status = isChecked ? 1 : 0;
                                                       window.location.href = "TestimonialStatus.php?id=" + memberId + "&status=" + status;
                                                   }
                                             </script>                                              
                                             <td>
                       <button class="btn btn-primary edit-testimonial-btn" 
                            data-toggle="modal" 
                            data-target="#editTestimonialModal" 
                            data-testimonialid="' . $row['id'] . '"
                            data-studentname="' . $row['studentName'] . '"
                            data-coursename="' . $row['courseName'] . '"
                            data-testimonialtext="' . $row['testimonialText'] . '">
                        Edit
                    </button> 
                                         </td>
                                   </tr>';
                                   }
                               } else {
                                   echo "No testimonials found!";
                               }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editTestimonialModal" tabindex="-1" role="dialog"
        aria-labelledby="editTestimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTestimonialModalLabel">Edit Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editTestimonialForm" action="testimonials.php" method="post">
                        <input type="hidden" id="editTestimonialId" name="editTestimonialId">

                        <div class="form-group">
                            <label for="editStudentName">Student Name:</label>
                            <input type="text" class="form-control" id="editStudentName" name="editStudentName"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="editCourseName">Course Name:</label>
                            <input type="text" class="form-control" id="editCourseName" name="editCourseName"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="editTestimonialText">Testimonial:</label>
                            <textarea class="form-control" id="editTestimonialText" name="editTestimonialText"
                                rows="3" required></textarea>
                        </div>

                        <button type="submit" name="updatesubmit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS, and finally DataTables JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#editTestimonialModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var testimonialId = button.data('testimonialid');
                var studentName = button.data('studentname');
                var courseName = button.data('coursename');
                var testimonialText = button.data('testimonialtext');

                var modal = $(this);
                modal.find('#editTestimonialId').val(testimonialId);
                modal.find('#editStudentName').val(studentName);
                modal.find('#editCourseName').val(courseName);
                modal.find('#editTestimonialText').val(testimonialText);
            });

            // Initialize DataTables correctly
            $("#myTable").DataTable();
        });
    </script>

<script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });
</script>
</body>

</html>
