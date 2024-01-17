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
  <div class="container mt-5">
    <h2 class="text-center">Agreement Form</h2>

    <form action="#" method="post" enctype="multipart/form-data">
        <!-- Agreement ID -->
        <div class="form-group">
            <label for="agreementId">Agreement ID:</label>
            <input type="text" class="form-control" id="agreementId" name="agreementId" placeholder="Enter ID">
        </div>

        <!-- Party A -->
        <div class="form-group">
            <label for="partyA">Party A:</label>
            <input type="text" class="form-control" id="partyA" name="partyA" placeholder="Enter a Name">
        </div>

        <!-- Party B -->
        <div class="form-group">
            <label for="partyB">Party B:</label>
            <input type="text" class="form-control" id="partyB" name="partyB" placeholder="Enter a Name" required>
        </div>

        <!-- Agreement Copy PDF -->
        <div class="form-group">
            <label for="agreementPdf">Agreement Copy PDF:</label>
            <input type="file" class="form-control-file" id="agreementPdf" name="agreementPdf" accept=".pdf" required>
        </div>

        <!-- Start Date -->
        <div class="form-group">
            <label for="startDate">Start Date:</label>
            <input type="date" class="form-control" id="startDate" name="startDate" required>
        </div>

        <!-- End Date -->
        <div class="form-group">
            <label for="endDate">End Date:</label>
            <input type="date" class="form-control" id="endDate" name="endDate" required>
        </div>

        <!-- Fee of Joining -->
        <div class="form-group">
            <label for="joiningFee">Fee of Joining:</label>
            <input type="number" class="form-control" id="joiningFee" name="joiningFee" required>
        </div>

        <!-- Revenue A Percentage -->
        <div class="form-group">
            <label for="revenueAPercentage">Revenue A Percentage:</label>
            <input type="number" class="form-control" id="revenueAPercentage" name="revenueAPercentage" required>
        </div>

        <!-- Revenue B Percentage -->
        <div class="form-group">
            <label for="revenueBPercentage">Revenue B Percentage:</label>
            <input type="number" class="form-control" id="revenueBPercentage" name="revenueBPercentage" required>
        </div>

        <!-- Revenue Date -->
        <div class="form-group">
            <label for="revenueDate">Revenue Date:</label>
            <input type="date" class="form-control" id="revenueDate" name="revenueDate" required>
        </div>

        <!-- Party B Photo -->
        <div class="form-group">
            <label for="partyBPhoto">Party B Photo:</label>
            <input type="file" class="form-control-file" id="partyBPhoto" name="partyBPhoto" accept="image/*" required>
        </div>

        <!-- Party B Details -->
        <div class="form-group">
            <label for="partyBName">Party B Name:</label>
            <input type="text" class="form-control" id="partyBName" name="partyBName" required>
        </div>

        <div class="form-group">
            <label for="partyBContact">Party B Contact:</label>
            <input type="text" class="form-control" id="partyBContact" name="partyBContact" placeholder="Enter a 10 digit number" required>
        </div>

        <div class="form-group">
            <label for="partyBEmail">Party B Email:</label>
            <input type="email" class="form-control" id="partyBEmail" name="partyBEmail" placeholder="Enter an E-mail">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
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


