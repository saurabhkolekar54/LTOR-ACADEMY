<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L & R Brain</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    <link rel="stylesheet" href="css/course.css">
</head>
<body>
<?php include('navbar.php');?> 
    <section class="courses">
        <h1 class="courses-heading">Courses</h1>
        <div class="course-cards-container">
            <div class="course-card">
                <img class="course-img" src="image/01.png" alt="Course Image 1">
                <div class="course-info">
                    <div class="course-title">L & R Brain</div>
                    <div class="location">
                        <span class="location-icon">📍</span> Location: City 1, Country 1
                    </div>
                    <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                    <div class="price">$99.99</div>
                    <a href="#" class="inquiry-btn">Inquire Now</a>
                </div>
            </div>

            <div class="course-card">
                <img class="course-img" src="image/02.png" alt="Course Image 2">
                <div class="course-info">
                    <div class="course-title">L & R Brain</div>
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
                <img class="course-img" src="download2.jpg" alt="Course Image 1">
                <div class="course-info">
                    <div class="course-title">L & R Brain</div>
                    <div class="location">
                        <span class="location-icon">📍</span> Location: City 1, Country 1
                    </div>
                    <div class="description">Course Description goes here. Provide a brief overview of the course.</div>
                    <div class="price">$99.99</div>
                    <a href="#" class="inquiry-btn">Inquire Now</a>
                </div>
            </div>

            <div class="course-card">
                <img class="course-img" src="download1.jpg" alt="Course Image 2">
                <div class="course-info">
                    <div class="course-title">L & R Brain</div>
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
    <?php include('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
