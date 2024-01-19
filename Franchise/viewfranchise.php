<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Franchise Panel</title>
	
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
   
  </head>
  <body>
 <div class="wrapper">
    <?php include('dashboard.php');?>
	 
    <div id="content" style="margin-top:100px">
    <div class="container mt-5">
    <table class="table table-striped table-bordered mt-10" id="myTable">
  <thead>
    <tr>
      <th scope="col">Franchise Id</th>
      <th scope="col">Franchise Owner Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Location</th>
      <th scope="col">Firm Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    // $sql="select * from crud";
    // $result=mysqli_query($con,$sql);
    // if($result)
    // {
    //    while( $row=mysqli_fetch_assoc($result))
    //    {
    //     $srno=$row['srno'];
    //     $name=$row['name'];
    //     $class=$row['class'];
    //     $phone=$row['phone'];     
    //     echo '<tr>
    //     <th scope="row">'.$srno.'</th>
    //     <td>'.$name.'</td>
    //     <td>'.$class.'</td>
    //     <td>'.$phone.'</td>
    //     <td>
    //     <button class="btn btn-primary"><a href="update.php?updateid='.$srno.'" class="text-light">Update</a></button>
    //     <button class="btn btn-danger"><a href="delete.php?deleteid='.$srno.'" class="text-light">Delete</a></button>
    //     </td>
    //     </tr>'; 
    //    }
        
    // }
    ?>
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

     $(document).ready(function() {
        $("#myTable").dataTable();
    });
  </script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
    </script>
  </body>
  
  </html>


