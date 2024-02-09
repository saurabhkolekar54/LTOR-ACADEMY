<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Careers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/career.css">

</head>

<body>
    <?php include('navbar.php');?>

    <section class="container mt-5">
        <h2 style="margin-top:110px">Careers</h2>

        <?php
// Assuming you already have a database connection
require 'connection.php';
// SQL query to retrieve job details
$sql = "SELECT * FROM job_vacancies WHERE status = 1";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract job details from the current row
        $jobTitle = $row['job_title'];
        $jobDescription = $row['skills_required'];
        $location = $row['location'];
        $salary = $row['salary'];
        $lateDate = $row['late_date'];

        // Output the HTML template for each job
        ?>
        <div class="card job-card mb-4">
            <h3 class="card-title">Job Title: <?php echo $jobTitle; ?></h3>
            <p class="card-text"><strong>Basic Skills:</strong> <?php echo $jobDescription; ?></p>
            <p class="card-text"><strong>Location:</strong> <?php echo $location; ?></p>
            <p class="card-text"><strong>Salary:</strong> <?php echo $salary; ?></p>
            <p class="card-text"><strong>Late Date:</strong> <?php echo $lateDate; ?></p>
            <a href="#" class="btn btn-primary apply-button" data-toggle="modal" data-target="#applyModal">Apply Now</a>
        </div>
        <?php
    }
} else {
    echo "No job vacancies found.";
}
// Close the database connection
mysqli_close($con);
?>

    <!-- Button to trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyModal">Apply Now </button> -->

    <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply Form</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body p-3">
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group ">
                                    <label for="name" class="mb-2">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label for="contact" class="mb-2">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact"
                                        placeholder="Enter your contact number">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group ">
                                    <label for="dob" class="mb-2">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label for="education" class="mb-2">Education</label>
                                    <input type="text" class="form-control" id="education"
                                        placeholder="Enter your education details">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group ">
                                    <label for="college" class="mb-2">College Name</label>
                                    <input type="text" class="form-control" id="college"
                                        placeholder="Enter your college name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group ">
                                    <label for="experience" class="mb-2">Experience</label>
                                    <input type="text" class="form-control" id="experience"
                                        placeholder="Enter your experience details">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group ">
                                    <label for="skills" class="mb-2">Skills</label>
                                    <select class="form-select" id="skills">
                                        <!-- Add options as needed -->
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="qualification" class="mb-2">Qualification</label>
                                    <select class="form-select" id="qualification">
                                        <!-- Add options as needed -->
                                        <option value="qualification1">Qualification 1</option>
                                        <option value="qualification2">Qualification 2</option>
                                        <option value="qualification3">Qualification 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="resume">Resume (PDF)</label>
                            <div class="border p-1">
                                <input type="file" class="form-control-file" id="resume">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>