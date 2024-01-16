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
<style>

.sticky-thead {
            position: sticky;
            top: 0;
            background-color: #fff; /* Set the background color as needed */
            z-index: 1000;
        }

        .scrollable-tbody {
            max-height: 500px; /* Set the max height as needed */
            overflow-y: auto;
        }
</style>
  </head>
  <body>
  <div class="wrapper">
    <?php include('dashboard.php');?>
	 
    <div id="content">
  <div class="container-fluid mt-5">
                <table class="table table-striped table-bordered">
                    <thead class="sticky-thead">
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
                        </tr>
                    </thead>
                    <tbody class="scrollable-tbody">
                        <!-- Add your table data here -->
                    </tbody>
</table>
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


