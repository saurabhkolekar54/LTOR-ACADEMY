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
  <h2>Add Batch</h2>
  <form>
    <div class="form-group">
      <label for="batchId">Batch ID:</label>
      <input type="text" class="form-control" id="batchId" name="batchId" required>
    </div>

    <div class="form-group">
      <label for="batchName">Batch Name:</label>
      <input type="text" class="form-control" id="batchName" name="batchName" required>
    </div>

    <div class="form-group">
      <label for="startDate">Starting Date:</label>
      <input type="date" class="form-control" id="startDate" name="startDate" required>
    </div>

    <div class="form-group">
      <label for="endDate">Ending Date:</label>
      <input type="date" class="form-control" id="endDate" name="endDate" required>
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
      <label for="mode">Mode:</label>
      <select class="form-control" id="mode" name="mode">
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
      </select>
    </div>

    <div class="form-group">
      <label for="facultyName">Faculty Name:</label>
      <input type="text" class="form-control" id="facultyName" name="facultyName" required>
    </div>

    <button type="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Batch</button>
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


