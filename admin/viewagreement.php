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
              <th scope="col">Agreement Id</th>
              <th scope="col">Party A Name</th>
              <th scope="col">Party B Name</th>
              <th scope="col">Agreement Copy</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Fee Of Joining</th>
              <th scope="col">Revenue A Percentage</th>
              <th scope="col">Revenue B Percentage</th>
              <th scope="col">Revenue Date</th>
              <!-- <th scope="col">Party B Name</th> -->
              <th scope="col">Party B Contact</th>
              <th scope="col">Party B Email</th>
              <th scope="col">Party B Photo</th>
              <th scope="col">Franchiseid</th>
              <th scope="col">Operation</th>

            </tr>
          </thead>
          <tbody>
            <?php
            require 'connection.php';
            $sql = "select * from agreementdetails";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $srno = $row['t_id'];
                $partyAName = $row['t_partyaname'];
                $partyBName = $row['t_partybname'];
                $agreementCopy = $row['t_agreementcopypdf'];
                $startDate = $row['t_startdate'];
                $endDate = $row['t_enddate'];
                $feeOfJoining = $row['t_feeofjoining'];
                $revenueAPercentage = $row['t_revenueofA'];
                $revenueBPercentage = $row['t_revenueofB'];
                $renewalDate = $row['t_renewaldate'];
                $partyBContact = $row['t_partybcontact'];
                $partyBEmail = $row['t_partybemail'];
                $partyBPhoto = $row['t_partybphoto'];
                $franchiseId = $row['t_franchiseid'];

                echo '<tr>
        <th scope="row">' . $srno . '</th>
        <td>' . $partyAName . '</td>
        <td>' . $partyBName . '</td>
        <td>' . $agreementCopy . '</td>
        <td>' . $startDate . '</td>
        <td>' . $endDate . '</td>
        <td>' . $feeOfJoining . '</td>
        <td>' . $revenueAPercentage . '</td>
        <td>' . $revenueBPercentage . '</td>
        <td>' . $renewalDate . '</td>
        <td>' . $partyBContact . '</td>
        <td>' . $partyBEmail . '</td>
        <td>' . $partyBPhoto . '</td>
        <td>' . $franchiseId . '</td>
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
          <h5 class="modal-title" id="exampleModalLabel">Update FranchiseAgreement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="post" enctype="multipart/form-data">
            <!-- Agreement ID -->
            <div class="form-group">
              <label for="agreementId">Agreement ID:</label>
              <input type="text" class="form-control" id="agreementId" name="agreementId" placeholder="Enter ID">
            </div>

            <div class="form-row">
              <!-- Party A -->
              <div class="form-group col-md-6">
                <label for="partyA">Party A:</label>
                <input type="text" class="form-control" id="partyA" name="partyA" placeholder="Enter a Name">
              </div>

              <!-- Party B -->
              <div class="form-group col-md-6">
                <label for="partyB">Party B:</label>
                <input type="text" class="form-control" id="partyB" name="partyB" placeholder="Enter a Name" required>
              </div>
            </div>

            <!-- Agreement Copy PDF -->
            <div class="form-group">
              <label for="agreementPdf">Agreement Copy PDF:</label>
              <div class="border p-1" style="border-radius:5px;">
                <input type="file" class="form-control-file" id="agreementPdf" name="agreementPdf" accept=".pdf" required>
              </div>
            </div>

            <div class="form-row">
              <!-- Start Date -->
              <div class="form-group col-md-6">
                <label for="startDate">Start Date:</label>
                <input type="date" class="form-control" id="startDate" name="startDate" required>
              </div>

              <!-- End Date -->
              <div class="form-group col-md-6">
                <label for="endDate">End Date:</label>
                <input type="date" class="form-control" id="endDate" name="endDate" required>
              </div>
            </div>
            <!-- Fee of Joining -->
            <div class="form-group">
              <label for="joiningFee">Fee of Joining:</label>
              <input type="number" class="form-control" id="joiningFee" name="joiningFee" required>
            </div>

            <div class="form-row">
              <!-- Revenue A Percentage -->
              <div class="form-group col-md-6">
                <label for="revenueAPercentage">Revenue A Percentage:</label>
                <input type="number" class="form-control" id="revenueAPercentage" name="revenueAPercentage" required>
              </div>

              <!-- Revenue B Percentage -->
              <div class="form-group col-md-6">
                <label for="revenueBPercentage">Revenue B Percentage:</label>
                <input type="number" class="form-control" id="revenueBPercentage" name="revenueBPercentage" required>
              </div>
            </div>

            <!-- Revenue Date -->
            <div class="form-group">
              <label for="revenueDate">Revenue Date:</label>
              <input type="date" class="form-control" id="revenueDate" name="revenueDate" required>
            </div>
            <div class="form-row">
              <!-- Party B Name -->
              <div class="form-group col-md-6">
                <label for="partybimage">Party B Image:</label>
                <div class="border p-1">
                  <input type="file" class="form-control-file" id="partybimage" name="partybimage" accept=".jpg,.jpeg,.png" required>
                </div>
              </div>

              <!-- Party B Contact -->
              <div class="form-group col-md-6">
                <label for="partyBContact">Party B Contact:</label>
                <input type="text" class="form-control" id="partyBContact" name="partyBContact" placeholder="Enter a 10 digit number" required>
              </div>
            </div>
            <div class="form-row">
              <!-- Party B Name -->
              <div class="form-group col-md-6">
                <label for="partyBEmail">Party B Email:</label>
                <input type="email" class="form-control" id="partyBEmail" name="partyBEmail" placeholder="Enter an E-mail">
              </div>

              <!-- Party B Contact -->
              <div class="form-group col-md-6">
                <label for="Franchiseid">Franchise Id:</label>
                <input type="text" class="form-control" id="Franchiseid" name="Franchiseid" placeholder="Enter an Franchise Id">
              </div>
            </div>

            <!-- Submit Button -->
            <!-- <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3  mt-4" style="width: 200px;">Update Agreement</button> -->
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