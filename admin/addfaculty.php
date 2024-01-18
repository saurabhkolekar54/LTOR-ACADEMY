<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
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
  <div class="container mt-4" style="width: 900px;">
  <h2 class="text-center"> Add Faculty</h2>
  <form action="#" method="post">

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


    <div class="form-group">
      <label for="maxStudentsHandled">Maximum Students Handled:</label>
      <input type="number" class="form-control" id="maxStudentsHandled" name="maxStudentsHandled" required>
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
    <button type="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Faculty</button>
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


