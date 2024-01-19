<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Faculty Panel</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
	

  </head>
  <body>
 <div class="wrapper">
    <?php include('dashboard.php');?>
	 
	<div id="content" style="margin-top:100px;margin-left:260px">
		<div class="container dashboard-cards">
			<div class="row">
				<div class="col-md-3 mb-4">
					<div class="card dashboard-card">
						<div class="card-header"></div>
						<div class="card-body">
							<h5 class="card-title" >Total Students</h5>
							<p class="card-text">1000</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-4">
					<div class="card dashboard-card">
						<div class="card-header"></div>
						<div class="card-body">
							<h5 class="card-title" >Total Faculty</h5>
							<p class="card-text">50</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-4">
					<div class="card dashboard-card">
						<div class="card-header"></div>
						<div class="card-body">
							<h5 class="card-title" >Total Courses</h5>
							<p class="card-text">20</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-4">
					<div class="card dashboard-card">
						<div class="card-header"></div>
						<div class="card-body">
							<h5 class="card-title" >Total Batches</h5>
							<p class="card-text">10</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-4">
					<div class="card dashboard-card">
						<div class="card-header"></div>
						<div class="card-body">
							<h5 class="card-title" >Total Franchises</h5>
							<p class="card-text">5</p>
						</div>
					</div>
				</div>
			</div>
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


