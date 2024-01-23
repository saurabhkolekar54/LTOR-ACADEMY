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
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
 <div class="wrapper">
    <?php include('dashboard.php');?>
	 
  <div id="content">
  <div class="container" style="width: 900px; margin-top:100px">
  <h2 class="text-center" >Add Student</h2>
  <form id="addStudentForm" onsubmit="validateForm(event)">
    <div class="form-row">
            <!-- Student ID -->
            <div class="form-group col-md-6">
                <label for="studentId" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID" required>
            </div>

            <!-- Name -->
            <div class="form-group col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="form-row">
            <!-- Email -->
            <div class="form-group col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                <div class="invalid-feedback" id="emailFeedback">
                    Please enter a valid email address in the format test@gmail.com.
                </div>
            </div>

            <!-- Contact -->
            <div class="form-group col-md-6">
                <label for="contact" class="form-label">Contact</label>
                <input type="tel" class="form-control" id="contact" placeholder="Enter Contact" pattern="[0-9]{10}" required>
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
                <input type="text" class="form-control" id="courseId" placeholder="Enter Course ID" required>
            </div>

            <!-- Batch No -->
            <div class="form-group col-md-4">
                <label for="batchNo" class="form-label">Batch No</label>
                <input type="text" class="form-control" id="batchNo" placeholder="Enter Batch No" required>
            </div>

            <!-- Franchise ID -->
            <div class="form-group col-md-4">
                <label for="franchiseId" class="form-label">Franchise ID</label>
                <input type="text" class="form-control" id="franchiseId" placeholder="Enter Franchise ID" required>
            </div>
        </div>      <button type="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Student</button>

    </form>
</div>

	</div>
		
 </div>
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });

  </script>
  </body>
  
  </html>


