<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

    <link rel="stylesheet" href="css/event.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">     
</head>
<body>
<?php include('navbar.php');?>

<div class="container-fluid event">
    <h1 class="slider-heading"><span class="letter">E</span>vents</h1>
    <div class="row">
            <div class="slider">
                <div class="list d-flex">
                    <div class="item">
                        <img src="image/index1.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index2.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index1.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index2.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index5.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index1.jpeg" alt="">
                    </div>
                    <!-- Add more items as needed -->
                </div>
                <div class="buttons d-flex justify-content-between">
                    <button class="btn btn-primary" id="prev">
                        < </button>
                            <button class="btn btn-primary" id="next">></button>
                </div>
                <ul class="dots list-inline text-center">
                    <li class="list-inline-item active"></li>
                    <!-- Add more dots as needed -->
                </ul>
                <div class="event-info text-center">
                    <p>Seminar on Business Development</p>
                    <p>Location: Tilak Road <br>Date: 6-01-2024</p>
                </div>
            </div>



            <div class="slider">
                <div class="list d-flex">
                    <div class="item">
                        <img src="image/g1.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g2.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g3.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g4.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g5.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g6.jpeg" alt="">
                    </div>
                    <!-- Add more items as needed -->
                </div>
                <div class="buttons d-flex justify-content-between">
                    <button class="btn btn-primary" id="prev">
                        <</button>
                            <button class="btn btn-primary" id="next">></button>
                </div>
                <ul class="dots list-inline text-center">
                    <li class="list-inline-item active"></li>
                    <!-- Add more dots as needed -->
                </ul>
                <div class="event-info text-center">
                    <p>Seminar on Business Development</p>
                    <p>Location: Tilak Road <br>Date: 6-01-2024</p>
                </div>
            </div>



            <div class="slider">
                <div class="list d-flex">
                    <div class="item">
                        <img src="image/index5.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g3.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g1.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index2.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/g1.jpeg" alt="">
                    </div>
                    <div class="item">
                        <img src="image/index1.jpeg" alt="">
                    </div>
                    <!-- Add more items as needed -->
                </div>
                <div class="buttons d-flex justify-content-between">
                    <button class="btn btn-primary" id="prev">
                        < </button>
                            <button class="btn btn-primary" id="next">></button>
                </div>
                <ul class="dots list-inline text-center">
                    <li class="list-inline-item active"></li>
                    <!-- Add more dots as needed -->
                </ul>
                <div class="event-info text-center">
                    <p>Seminar on Business Development</p>
                    <p>Location: Tilak Road <br>Date: 6-01-2024</p>
                </div>
            </div>

        </div>
      </div>

    
    <section>
        <div class="container mb-5">
            <h2 class="mb-5 mt-5 text-center">Upcoming Events</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="event-item p-3 mb-3 border rounded bg-light">
                        <h5 class="event-title " style="color:#00b9fe">Event 1</h5>
                        <div class="event-details">
                            <p class="mb-1">Location: Conference Hall</p>
                            <p class="mb-1">Date: January 15, 2024</p>
                            <p class="mb-1">Time: 10:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-item p-3 mb-3 border rounded bg-light">
                        <h5 class="event-title " style="color:#00b9fe">Event 2</h5>
                        <div class="event-details">
                            <p class="mb-1">Location: Auditorium</p>
                            <p class="mb-1">Date: February 1, 2024</p>
                            <p class="mb-1">Time: 3:00 PM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-item p-3 mb-3 border rounded bg-light">
                        <h5 class="event-title" style="color:#00b9fe">Event 3</h5>
                        <div class="event-details">
                            <p class="mb-1">Location: Rooftop Garden</p>
                            <p class="mb-1">Date: March 10, 2024</p>
                            <p class="mb-1">Time: 6:30 PM - 9:30 PM</p>
                        </div>
                    </div>
                </div>
                <!-- Add more event items as needed -->
            </div>
        </div>
    </section>


    <?php include('footer.php');?>

    <script src="js/event.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
