<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>UseDailyPayMonthly</title>
  <!-- Plugins CSS -->
  <link href="css/plugins.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <!--Font awesome cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
</head>

<body>
  <!-- Pre Loader -->
  <div id="dvLoading"></div>
  <div class="wrapper">
    <!-- header -->
    <div class="header-bg">
      <header class="main-header">
        <div class="container_header phone_view border_top_bott">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
              <div class="menu-icon"> <a href="javascript:void(0)" class="menu-toggler sidebar-toggler"></a> </div>
              <div class="logo d-flex align-items-center justify-content-center"> <a href="javascript:void(0)"> <strong class="logo_icon"> <img src="images/small-logo.png" alt=""> </strong> <span class="logo-default">
                    <img src="images/small-logo.png" alt=""> </span> </a> </div>
              <div class="right_detail">
                <div class="row d-flex align-items-center justify-content-end">
                  <div class="col-xl-12 col-12 d-flex justify-content-end">
                    <div class="right_bar_top d-flex align-items-center">

                      <!-- notification_Start -->
                      <div class="dropdown dropdown-notification"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                          <i class="fa fa-bell"></i> <span class="badge_coun"> 6 </span> </a>
                        <ul class="dropdown-menu scroll_auto height_fixed">
                          <li class="bigger">
                            <h3><span class="bold">Notifications</span></h3>
                            <span class="notification-label">New 6</span>
                          </li>
                          <li>
                            <ul class="dropdown-menu-list">
                              <li> <a href="javascript:void(0)"> <span class="time">just now</span> <span class="details"> <span class="notification-icon deepPink-bgcolor"> <i class="fa fa-check"></i> </span> Congratulations!. </span> </a> </li>
                              <li> <a href="javascript:void(0)"> <span class="time">3 mins</span> <span class="details">
                                    <span class="notification-icon purple-bgcolor"> <i class="fa fa-user o"></i> </span>
                                    <b>John Micle </b>is now following you. </span> </a> </li>
                              <li> <a href="javascript:void(0)"> <span class="time">7 mins</span> <span class="details">
                                    <span class="notification-icon blue-bgcolor"> <i class="fa fa-comments-o"></i>
                                    </span> <b>Sneha Jogi </b>sent you a message. </span> </a> </li>
                              <li> <a href="javascript:void(0)"> <span class="time">12 mins</span> <span class="details"> <span class="notification-icon pink"> <i class="fa fa-heart"></i>
                                    </span> <b>Ravi Patel </b>like your photo. </span> </a> </li>
                              <li> <a href="javascript:void(0)"> <span class="time">15 mins</span> <span class="details"> <span class="notification-icon yellow"> <i class="fa fa-warning"></i> </span> Warning! </span> </a> </li>
                              <li> <a href="javascript:void(0)"> <span class="time">10 hrs</span> <span class="details">
                                    <span class="notification-icon red"> <i class="fa fa-times"></i> </span> Application
                                    error. </span> </a> </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <!-- notification_End -->

                      <!-- Dropdown_User -->
                      <div class="dropdown dropdown-user"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                          <img class="img-circle pro_pic" src="images/user3.png" alt=""> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                          <li>
                            <div class="user-panel">
                              <div class="user_image"> <img src="images/user3.png" class="img-circle mCS_img_loaded" alt=""> </div>
                              <div class="info">
                                <p> Pankaj Kumar </p>
                                <a href="#"> info@offerplant.com</a>
                              </div>
                            </div>
                          </li>
                          <li> <a href="#"> <i class="fas fa-user-circle"></i> Profile </a> </li>
                          <li> <a href="#"> <i class="fas fa-user-cog"></i> Settings </a> </li>
                          <li> <a href="#"> <i class="fas fa-sign-out-alt"></i> Log Out </a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
    <!-- header_End -->
    <!-- Content_right -->
    <div class="container_full">
      <div class="side_bar scroll_auto">
        <div class="user-panel">
          <div class="user_image"> <img src="images/about-1.jpg" class="img-circle mCS_img_loaded" alt=""> </div>
          <div class="info">
            <p> Pankaj Rai - Admin</p>
            <!-- <a href="#"> <i class="fa fa-circle text-success"></i> Online</a> </div> -->
          </div>
        </div>
        <ul id="dc_accordion" class="sidebar-menu tree">
          <li> <a href="index.php" class=" active"> <i class="ti-home"></i> <span>Dashboard</span></a> </li>
          <li> <a href="customerGroup.php" class=" active"> <i class="fas fa-users"></i>
              <span>Customers-Group</span></a>
          </li>
          <li> <a href="customers.php" class=" active"> <i class="fas fa-user"></i><span>Customers</span></a> </li>
          <li> <a href="products.php" class=" active"><i class="fas fa-shopping-bag"></i><span>Products</span></a>
          </li>
          <li> <a href="dailyTask.php" class=" active"><i class="fas fa-tasks"></i><span>Daily Task</span></a></li>
          <li> <a href="collectionpage.php" class=" active"><i class="fas fa-file-alt"></i><span>Collection Report</span></a>
          </li>
          <li> <a href="index.php" class=" active"> <i class="fas fa-file-invoice"></i> <span>Dues Report</span></a>
          </li>
          <ul class="down_menu">
            <li> <a href="profile.html">User Profile</a> </li>
            <li> <a href="page-login.html">Sign In</a> </li>
            <li> <a href="page-register.html">Sign Up</a> </li>
            <li> <a href="invoice.html">Invoice</a> </li>
            <li> <a href="page_404.html">404</a> </li>
          </ul>
          </li>
        </ul>
      </div>
      <div class="content_wrapper bg_homebefore">
        <div class="container-fluid">
          <div class="sec-title">
            <div class="row d-flex align-items-center">
              <div class="main__title">
                <img src="assets/hello.svg" alt="" />
                <div class="main__greeting">
                  <h1>Hello OfferPlant</h1>
                  <p>Welcome to your admin dashboard</p>
                </div>
              </div>
            </div>
          </div>
          <div class="content-bar">
            <!-- Start row -->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-12 col-xl-3">
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Group of Customer</p>
                        <h4 class="card-title mb-0 border-0">10</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti ti-arrow-top-right line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">All Customers</p>
                        <h4 class="card-title mb-0 border-0">100</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti ti-money line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Products</p>
                        <h4 class="card-title mb-0 border-0">20</h4>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti-user line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Daily Task</p>
                        <!-- <h4 class="card-title mb-0 border-0">10%</h4> -->
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti ti-arrow-top-right line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Collection Report</p>
                        <!-- <h4 class="card-title mb-0 border-0">498</h4> -->
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti ti-money line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="card m-b-20">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col-8">
                        <p class="font-15">Dues Report</p>
                      </div>
                      <div class="col-4 text-right"> <span class="iconbar iconbar-md bg-primary text-white rounded"><i class="ti-user line align-unset"></i></span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End row -->
            <!-- Start row -->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-12 col-xl-9">
                <div class="card m-b-30">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-6 col-lg-9">
                        <h5 class="card-title mb-0">Average Monthly Revenue</h5>
                      </div>
                      <div class="col-6 col-lg-3">
                        <select class="form-control font-12">
                          <option value="class1" selected>Last Week</option>
                          <option value="class2">Last Month</option>
                          <option value="class3">Last Year</option>
                        </select>
                      </div>
                    </div>
                    <h2>$8,66,587</h2>
                  </div>
                  <div class="card-body p-0">
                    <div id="apex-area-chart"></div>
                  </div>
                </div>
              </div>
              <!-- popup on load starts here -->
              <!-- <div class="container"> -->
                <!-- Trigger the modal with a button -->
                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

                <!-- Modal -->
                <!-- <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog"> -->

                    <!-- Modal content-->
                    <!-- <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

              </div> -->

              <!--popup on loads ends here -->
              <!-- End col -->
            </div>
            <!-- End row -->
            <div class="row">
              <div class="col-lg-12">
                <!-- Start Footerbar -->
                <div class="footerbar">
                  <footer class="footer">
                    <p class="mb-0">© <span id="year"></span> OfferPlant,Chhapra - All Rights Reserved.</p>
                  </footer>
                </div>
                <!-- End Footerbar -->
              </div>
            </div>
          </div>
          <!-- End Rightbar -->
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--jquery js -->
  <script src="js/jquery-min.js"></script>
  <script src="js/popper.min.js"></script>
  <!--jquery js -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery js -->
  <script src="js/plugins.js"></script>
  <!--mCustomScrollbar js -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <!--Fontawesome js -->
  <script src="js/fontawesome.js"></script>
  <!--Dcjqaccordion js -->
  <script src="js/jquery.dcjqaccordion.js"></script>
  <!--Charts js -->
  <script src="js/apexcharts.min.js"></script>
  <!--Custom Dashboard js -->
  <script src="js/custom-dashboard.js"></script>
  <!--jquery js -->
  <script src="js/custom.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <!-- <script>
    $(window).load(function() {
      $('#myModal').modal('show');
    });
  </script> -->
</body>

</html>