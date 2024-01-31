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
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
  <div class="wrapper">
    <?php include('dashboard.php'); ?>

    <div id="content" style="margin-top:100px">
      <div class="container mt-5">
        <table class="table table-striped table-bordered mt-10" id="myTable">
          <thead>
            <tr>
              <th scope="col">Franchise Id</th>
              <th scope="col">Franchise Owner Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Image</th>
              <th scope="col">Firm Name</th>
              <th scope="col">State</th>
              <th scope="col">District</th>
              <th scope="col">Taluka</th>
              <th scope="col">Location</th>
              <th scope="col">Pincode</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require 'connection.php';
            $sql = "select * from franchise";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $name = $row['t_ownername'];
                $email = $row['t_email'];
                $contact = $row['t_contact'];
                $image = $row['t_image'];
                $firmName = $row['t_frimname'];
                $state = $row['t_state'];
                $district = $row['t_district'];
                $taluka = $row['t_taluka'];
                $location = $row['t_location'];
                $pincode = $row['t_pincode'];
                echo '<tr>
                <th scope="row">' . $srno . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $contact . '</td>
                <td>' . $image . '</td>
                <td>' . $firmName . '</td>
                <td>' . $state . '</td>
                <td>' . $district . '</td>
                <td>' . $taluka . '</td>
                <td>' . $location . '</td>
                <td>' . $pincode . '</td>
        <td>
        <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button> &nbsp
       <button class="btn btn-danger btn-sm "><a href="delete.php?deleteid=' . $srno . '" class="text-light">Delete</a></button>
        </div>
        </td>
        </tr>';
              }
            }
            ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>

  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Franchise</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mt-4" method="POST" enctype="multipart/form-data">
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

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="franchiseImage">Franchise Image:</label>
                <div class="border p-1" style="border-radius:5px;">
                  <input type="file" class="form-control-file" id="franchiseImage" name="franchiseImage" accept="image/*" required>
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="franchiseName">Frim Name:</label>
                <input type="text" class="form-control" id="franchiseName" name="franchiseName" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="state">State:</label>
                <select class="form-control" id="state" name="state" onchange="loadDistricts()" required>
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
                <select class="form-control" id="district" name="district" onchange="loadSubDistricts()" required></select>
              </div>

              <div class="form-group col-md-4">
                <label for="subdistrict">Subdistrict:</label>
                <select id="subdistrict" name="subdistrict" class="form-control"></select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="village">Village:</label>
                <input type="text" class="form-control" id="village" name="village" required>
              </div>

              <div class="form-group col-md-6">
                <label for="pincode">Pincode:</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
              </div>
            </div>

            <!-- <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Update Franchise</button> -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
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

    $(document).ready(function() {
      $("#myTable").dataTable();
    });
  </script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    let table = new DataTable('#myTable');
  </script>
</body>

</html>