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
    <div class="container">
    <table class="table table-striped table-bordered mt-5" >
  <thead>
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">Course Id</th>
      <th scope="col">Batch Id</th>
      <th scope="col">Franchise Id</th>
      <th scope="col">Operations</th>
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
  </script>
  </body>
  
  </html>


