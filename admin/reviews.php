<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS3 -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php include('dashboard.php'); ?>

        <!-- Form for Adding Team Members -->
        <div id="content" style="margin-top:80px">
            <section class="add-team-member">
                <div class="container">
                    <h2 class="text-center mt-3">Add Image in Gallery</h2>
                    <form id="addTeamMemberForm" action="teammember.php" method="post" enctype="multipart/form-data">
                        <div class="form-row align-items-center">
                        <div class="form-group col-md-4">
                                <label for="memberImage">Upload Image:</label>
                                <div class="border p-1" style="border-radius:5px;">
                                    <input type="file" class="form-control-file" id="memberImage" name="memberImage"
                                        accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="memberName">Description:</label>
                                <input type="text" class="form-control" id="memberName" name="memberName" required>
                            </div>
                          
                            <div class="form-group col-md-2">
                                <input type="submit" name="submit" class="btn btn-primary mt-4" value="Update">
                            </div>
                        </div>
                    </form>

                    <table id="teamMembersTable" class="table mt-4">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>


    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".xp-menubar").on('click', function() {
            $("#sidebar").toggleClass('active');
            $("#content").toggleClass('active');
        });

        $('.xp-menubar,.body-overlay').on('click', function() {
            $("#sidebar,.body-overlay").toggleClass('show-nav');
        });
    });

    </script>
</body>

</html>