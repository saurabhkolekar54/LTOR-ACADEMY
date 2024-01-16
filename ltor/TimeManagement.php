<!DOCTYPE html>
<html lang="en">
<head>
    <!-- your existing head content -->
    <!-- Add the following script tag to include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/course.css">
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/footer.css"> 
   
</head>
<body class="fixed-navbar-padding">
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="image/icon.jpeg" alt="Education Logo">
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Courses</a>
                    <ul class="submenu">
                        <li><a href="SpokenEnglish.php">Spoken English</a></li>
                        <li><a href="ConfidenceBuilding.php">Confidence Building</a></li>
                        <li><a href="PublicSpeaking.php">Public Speaking</a></li>
                        <li><a href="SuccessKey.php">Success Key</a></li>
                        <li><a href="LeadershipQuality.php">Leadership Quality</a></li>
                        <li><a href="LRBrain.php">L & R Brain</a></li>
                        <li><a href="StudySkills.php">Study Skills</a></li>
                        <li><a href="Discipline.php">Discipline</a></li>
                        <li><a href="GoodRelationship.php">Good Relationship</a></li>
                        <li><a href="PersonalityDevelopment.php">Personality Development</a></li>
                        <li><a href="TimeManagement.php">Time Management</a></li>
                    </ul>
                </li>
                <li><a href="gallery.php">Gallery</a>
                    <!-- <ul class="submenu">
                        <li><a href="gallery.php">Photos</a></li>
                        <li><a href="#">Events Photo</a></li>
                    </ul> -->
                </li>
                <li><a href="#">Business Activities</a>
                    <ul class="submenu">
                        <li><a href="Training.php">Training</a></li>
                        <li><a href="Placement.php">Placement</a></li>
                        <li><a href="Marketing.php">Marketing</a></li>
                        <li><a href="BusinessMeetUp.php">Business Meet-up</a></li>
                        <li><a href="Exhibition.php">Exhibition</a></li>
                        <li><a href="Seminars.php">Seminars</a></li>
                    </ul>
                </li>
                <li><a href="#">Franchise</a>
                    <ul class="submenu">
                        <li><a href="Inquiry.php">Inquiry</a></li>
                        <li><a href="OurFranchise.php">Our Franchise</a></li>
                        <li><a href="CriteriaFranchise.php">Criteria for Franchise</a></li>
                    </ul>
                </li>
                <li><a href="Events.php">Events</a>
                </li>
                <li><a href="index.php#about-us">About Us</a></li>
                <li><a href="Career.php">Career</a>
                </li>
                <li><a href="Internship.php">Internship</a>
                    <!-- <ul class="submenu">
                        <li><a href="#">What is Internship</a></li>
                        <li><a href="#">Criteria</a></li>
                        <li><a href="#">Our Interns</a></li>
                    </ul> -->
                </li>
            </ul>
            <div class="user-account">
                <!-- You can include login/signup buttons or user account information here -->
                <a href="#">Login</a>
                <a href="#">Sign Up</a>
            </div>
        </nav>
    </header>

    <!-- Add the provided code below the navbar -->
    <section class="courses">
        <div class="course-cards-container">
            <div class="course-card">
              <img class="course-img" src="image/1.jpg" alt="Course Image 1">
              <div class="course-info">
                <div class="course-title">Time Management</div>
                <div class="location">
                  <span class="location-icon">📍</span> Location: City 1, Country 1
                </div>
                <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                <div class="price">$99.99</div>
                <a href="#" class="inquiry-btn">Inquire Now</a>
              </div>
            </div>
        
            <div class="course-card">
              <img class="course-img" src="2.jpg" alt="Course Image 2">
              <div class="course-info">
                <div class="course-title">Time Management</div>
                <div class="location">
                  <span class="location-icon">📍</span> Location: City 2, Country 2
                </div>
                <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                <div class="price">$129.99</div>
                <a href="#" class="inquiry-btn">Inquire Now</a>
              </div>
            </div>
          </div>
        
          <div class="course-cards-container">
            <div class="course-card">
              <img class="course-img" src="1.jpg" alt="Course Image 1">
              <div class="course-info">
                <div class="course-title">Time Management</div>
                <div class="location">
                  <span class="location-icon">📍</span> Location: City 1, Country 1
                </div>
                <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                <div class="price">$99.99</div>
                <a href="#" class="inquiry-btn">Inquire Now</a>
              </div>
            </div>
        
            <div class="course-card">
              <img class="course-img" src="2.jpg" alt="Course Image 2">
              <div class="course-info">
                <div class="course-title">Time Management</div>
                <div class="location">
                  <span class="location-icon">📍</span> Location: City 2, Country 2
                </div>
                <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                <div class="price">$129.99</div>
                <a href="#" class="inquiry-btn">Inquire Now</a>
              </div>
            </div>
          </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="copyright">
                    <p>&copy; 2024 Your Website. All rights reserved.</p>
                </div>
                <div class="social-media-icons">
                    <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" title="Pinterest"><i class="fab fa-pinterest"></i></a>                    
                    <a href="#" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>                    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
