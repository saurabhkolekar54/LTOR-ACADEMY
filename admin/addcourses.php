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
    <div class="container" style="width: 1200px; margin-top:100px">
  <h2 class="text-center" style="margin-left:260px">Add Course</h2>
  <form class="mt-4" style="margin-left:260px">
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

        <div class="form-group">
            <label for="courseSyllabus">Course Syllabus:</label>
            <div class="border p-1"> <!-- Add a border class and padding -->
                <input type="file" class="form-control-file" id="courseSyllabus" name="courseSyllabus">
            </div>
        </div>

        <div class="form-group">
            <label for="courseMode">Course Mode:</label>
            <select class="form-control" id="courseMode" name="courseMode" required>
                <option value="online">Online</option>
                <option value="offline">Offline</option>
            </select>
        </div>

    <button type="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Course</button>
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


