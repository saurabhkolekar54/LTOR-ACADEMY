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
  <h2 class="text-center">Add Franchise</h2>
    <form id="inquiryForm" method="post" action="inquiry.php">
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
                        <option value="AndraPradesh">Andhra Pradesh</option>
                        <option value="ArunachalPradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="HimachalPradesh">HimachalPradesh</option>
                        <option value="JammuKashmir">JammuKashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Kerala">Kerala</option>
                        <option value="MadhyaPradesh">MadhyaPradesh</option>
                        <option value="Sehore">Sehore</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="TamilNadu">TamilNadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="UttarPradesh">UttarPradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="WestBengal">WestBengal</option>
                        <option value="AndamanNicobar">AndamanNicobar</option>
                        <option value="DamanDiu">DamanDiu</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                    </select>
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


