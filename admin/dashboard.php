<div class="wrapper">
     <style>
      .top-navbar {
         position: fixed;
         top: 0;
         width: 100%;
         z-index: 1000; 
         margin-left: 260px;
      }
      #sidebar{
	  position:fixed;
	  height:100%!important;
	  top:0;
	  left:0;
	  bottom:0;
	  z-index:11;
	  width:260px;
	  overflow:auto;
	  transition:all 0.3s;
	  background-color:#fff;
	  box-shadow:0 0 30px 0 rgba(200 200 200 / 20%);
  }
  .sidebar-header {
        position: fixed;
        top: 0;
        left: 0;
        width:260px;
        background-color: #fff; /* Adjust the background color as needed */
        padding: 10px;
        z-index: 1000; /* Adjust the z-index as needed to ensure it's above other elements */
    }

    .sidebar-header h3 {
        display: flex;
        align-items: center;
    }

    .sidebar-header img {
        margin-right: 10px;
    }
     </style>
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
        <div class="sidebar-header">
            <h3><img src="image/icon.jpeg" class="img-fluid" style="width: 40px;"/><span>Ltor Academy</span></h3>
         </div>
         <ul class="list-unstyled component" style="margin-top:60px;">
           <li class="active">
           <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i>Dashboard </a>
           </li>
           
           <li class="dropdown">
           <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
           class="dropdown-toggle">
           <i class="material-icons">person</i>Students</a>
           <ul class="collapse list-unstyled menu" id="homeSubmenu1">
              <li><a href="addstudent.php">Add Students</a></li>
              <li><a href="viewstudent.php">View Students</a></li>
           </ul>
           </li>
           
           
            <li class="dropdown">
           <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
           class="dropdown-toggle">
           <i class="material-icons">book</i>Courses
           </a>
           <ul class="collapse list-unstyled menu" id="homeSubmenu2">
              <li><a href="addcourses.php">Add Courses</a></li>
              <li><a href="viewcourses.php">View Courses</a></li>
           </ul>
           </li>
           
            <li class="dropdown">
           <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
           class="dropdown-toggle">
           <i class="material-icons">person</i>Faculty
           </a>
           <ul class="collapse list-unstyled menu" id="homeSubmenu3">
              <li><a href="addfaculty.php">Add Faculty</a></li>
              <li><a href="viewfaculty.php">View Faculty</a></li>
           </ul>
           </li>
           
           
            <li class="dropdown">
           <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
           class="dropdown-toggle">
           <i class="material-icons">business</i>Franchise
           </a>
           <ul class="collapse list-unstyled menu" id="homeSubmenu4">
              <li><a href="addfranchise.php">Add Franchise</a></li>
              <li><a href="viewfranchise.php">View Franchise</a></li>
              <li><a href="addagreement.php">Add Franchise Agreement</a></li>
              <li><a href="viewagreement.php">View Franchise Agreement</a></li>
           </ul>
           </li>
           
            <li class="dropdown">
           <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
           class="dropdown-toggle">
           <i class="material-icons">date_range</i>Batch
           </a>
           <ul class="collapse list-unstyled menu" id="homeSubmenu5">
              <li><a href="addbatch.php">Add Batch</a></li>
              <li><a href="viewbatch.php">View Batches</a></li>
           </ul>
           </li>

           <li class="dropdown">
           <a href="viewleads.php" aria-expanded="false">
           <i class="material-icons">assignment</i>Leads
           </a>
           </li>
           <li class="dropdown">
            <a href="aboutus.php" aria-expanded="false">
               <i class="material-icons">info</i>About Us
            </a>
         </li>
         <li class="dropdown">
            <a href="teammember.php" aria-expanded="false">
               <i class="material-icons">group</i>Team Members
            </a>
         </li>
	 </div>
      <div class="top-navbar"> <!-- Apply fixed-top class directly to top-navbar -->
        <div class="xd-topbar">
          <div class="row">
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center p-4">
             
					 </div>							 
				 </div>			 
			 </div>
		  </div>
</div>		    