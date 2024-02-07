<div class="wrapper">
    <style>
    .top-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        margin-left: 260px;
    }

    #sidebar {
        position: fixed;
        height: 100% !important;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 11;
        width: 260px;
        overflow: auto;
        transition: all 0.3s;
        background-color: #fff;
        box-shadow: 0 0 30px 0 rgba(200 200 200 / 20%);
    }

    .sidebar-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 260px;
        background-color: #fff;
        /* Adjust the background color as needed */
        padding: 10px;
        z-index: 1000;
        /* Adjust the z-index as needed to ensure it's above other elements */
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
            <h3><img src="icon.jpeg" class="img-fluid" style="width: 40px;" /><span>Ltor Academy</span></h3>
        </div>
        <ul class="list-unstyled component" style="margin-top:60px;">
            <li class="active">
                <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i>Dashboard </a>
            </li>


            <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">person</i>Faculty Payment</a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li><a href="facultypayment.php">Add Faculty Payment</a></li>
                    <li><a href="view_faculty_payment.php">View Faculty Payment</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">book</i>Student Fees
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                    <li><a href="studentfee.php">Add Student Fees</a></li>
                    <li><a href="view_student_fee.php">View Student Fees</a></li>
                </ul>
            </li>


    </div>
    <div class="top-navbar">
        <!-- Apply fixed-top class directly to top-navbar -->
        <div class="xd-topbar">
            <div class="row">
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center p-4">

                </div>
            </div>
        </div>
    </div>
</div>