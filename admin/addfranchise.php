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
  <h2 class="text-center" style="margin-left:260px">Add Franchise</h2>
    <form id="inquiryForm" method="post" action="inquiry.php" style="margin-left:260px">
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="id">Franchise Id:</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>

        <div class="form-group col-md-6">
            <label for="name">Franchise Owner Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group col-md-6">
            <label for="contact">Contact No:</label>
            <div class="input-group">
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Phone Number" required>
            </div>
        </div>
    </div>

        <div class="form-group">
            <label for="franchiseName">Frim Name:</label>
            <input type="text" class="form-control" id="franchiseName" name="franchiseName" required>
        </div>
       
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="state">State:</label>
            <select class="form-control" id="state" name="state" required>
                <option value="">Select State</option>
                <option value="state1">State 1</option>
                <option value="state2">State 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="district">District:</label>
            <select class="form-control" id="district" name="district" required>
                <option value="">Select District</option>
                <option value="district1">District 1</option>
                <option value="district2">District 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="subdistrict">Subdistrict:</label>
            <select class="form-control" id="subdistrict" name="subdistrict" required>
                <option value="">Select Subdistrict</option>
                <option value="subdistrict1">Subdistrict 1</option>
                <option value="subdistrict2">Subdistrict 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="village">Village:</label>
            <input type="text" class="form-control" id="village" name="village" required>
        </div>

        <div class="form-group col-md-6">
            <label for="pincode">Pincode:</label>
            <select class="form-control" id="pincode" name="pincode" required>
                <option value="">Select Pincode</option>
                <option value="pincode1">Pincode 1</option>
                <option value="pincode2">Pincode 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>

        <button type="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Add Franchise</button>
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


