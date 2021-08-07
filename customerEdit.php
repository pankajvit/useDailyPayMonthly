<?php 
if(isset($_GET['id'])){
    $eid = $_GET['id'];
}else{
    $eid=0;
}
?>
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
    <link href="css/customers.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!--Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                                            <li> <a href="javascript:void(0)"> <span class="time">just
                                                                        now</span> <span class="details"> <span class="notification-icon deepPink-bgcolor">
                                                                            <i class="fa fa-check"></i> </span>
                                                                        Congratulations!. </span> </a> </li>
                                                            <li> <a href="javascript:void(0)"> <span class="time">3
                                                                        mins</span> <span class="details">
                                                                        <span class="notification-icon purple-bgcolor">
                                                                            <i class="fa fa-user o"></i> </span>
                                                                        <b>John Micle </b>is now following you. </span>
                                                                </a> </li>
                                                            <li> <a href="javascript:void(0)"> <span class="time">7
                                                                        mins</span> <span class="details">
                                                                        <span class="notification-icon blue-bgcolor"> <i class="fa fa-comments-o"></i>
                                                                        </span> <b>Sneha Jogi </b>sent you a message.
                                                                    </span> </a> </li>
                                                            <li> <a href="javascript:void(0)"> <span class="time">12
                                                                        mins</span> <span class="details"> <span class="notification-icon pink"> <i class="fa fa-heart"></i>
                                                                        </span> <b>Ravi Patel </b>like your photo.
                                                                    </span> </a> </li>
                                                            <li> <a href="javascript:void(0)"> <span class="time">15
                                                                        mins</span> <span class="details"> <span class="notification-icon yellow"> <i class="fa fa-warning"></i> </span>
                                                                        Warning! </span> </a> </li>
                                                            <li> <a href="javascript:void(0)"> <span class="time">10
                                                                        hrs</span> <span class="details">
                                                                        <span class="notification-icon red"> <i class="fa fa-times"></i> </span>
                                                                        Application
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
                                                    <li> <a href="#"> <i class="fas fa-user-circle"></i> Profile </a>
                                                    </li>
                                                    <li> <a href="#"> <i class="fas fa-user-cog"></i> Settings </a>
                                                    </li>
                                                    <li> <a href="#"> <i class="fas fa-sign-out-alt"></i> Log Out </a>
                                                    </li>
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
                    <div class="user_image"> <img src="images/about-1.jpg" class="img-circle mCS_img_loaded" alt="">
                    </div>
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
                    <li> <a href="customers.php" class=" active"> <i class="fas fa-user"></i><span>Customers</span></a>
                    </li>
                    <li> <a href="products.php" class=" active"><i class="fas fa-shopping-bag"></i><span>Products</span></a> </li>
                    <li> <a href="dailyTask.php" class=" active"><i class="fas fa-tasks"></i><span>Daily Task</span></a>
                    </li>
                    <li> <a href="index.php" class=" active"><i class="fas fa-file-alt"></i><span>Collection
                                Report</span></a>
                    </li>
                    <li> <a href="index.php" class=" active"> <i class="fas fa-file-invoice"></i> <span>Dues
                                Report</span></a>
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
                        <div class="row container-fluid">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Customer name</th>
                                        <th>Address</th>
                                        <th style="text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <?php
                                    include 'dbcon.php';
                                    $q = "select * from customerdb";
                                   
                                    $query = mysqli_query($con,$q);
                                    $i=1;

                                    while($res = mysqli_fetch_array($query)){
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $res['name'];?></td>
                                        <td><?php echo $res['address'];?></td>
                                        <td style="text-align: center;">
                                            <div class="actionBox">
                                                <span>
                                                <a href="customerEdit.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-edit action-icon"></i>
                                                </a>
                                                </span>
                                                <span>
                                                <a href="customerDelete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="fa fa-trash action-icon"></i>
                                                </a>
                                                </span>
                                                <span class="toggle-button">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="<?php echo "switch".$i;?>">
                                                        <label class="custom-control-label" for="<?php echo "switch".$i;?>"></label>
                                                    </div>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                $i++; 
                                }
                                ?>
                            </table>
                            <a href="#" class="float" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus my-float"></i>
                            </a>
                            <!---modal pop-up -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Enter Customer Details</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']).'?id='.$eid; ?>" method="POST">
                                            <?php
                                            if(isset($_GET['id']))
                                            {
                                            include 'dbcon.php';
                                            $ids = $_GET['id'];

                                            $showquery = "select * from customerdb where id=$ids";
                                            $showdata = mysqli_query($con, $showquery);
                                            $arrdata = mysqli_fetch_array($showdata);
                                            // print_r($_POST);
                                            }
                                            ?>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="usr">Name :</label>
                                                    <input type="text" name="name" value="<?php echo $arrdata['name']; ?>" class="form-control" id="usr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address :</label>
                                                    <input type="text" name="address" value="<?php echo $arrdata['address']; ?>" class="form-control" id="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobile">Mobile No :</label>
                                                    <input type="text" name="mobile" value="<?php echo $arrdata['mobileno']; ?>" class="form-control" id="mobile">
                                                </div>
                                                <label for="">Select group for Customer :</label>
                                                <select name="cgroup" class="custom-select">
                                                <?php
                                                    include 'dbcon.php';
                                                    $q = "select * from groupdb ";
                                                   
                                                    $query = mysqli_query($con,$q);
                
                                                    while($res = mysqli_fetch_array($query)){
                                                ?>
                                                    <!-- <option selected>Select group for Customer</option> -->
                                                    <option value="<?php echo $res['id']?>" selected><?php echo $res['groupName']; ?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                                <br>
                                                <br>
                                                <label for="">Check(tick) product for Customer :</label>
                                                <?php
                                                    include 'dbcon.php';
                                                    $i=1;
                                                    $selectquery = "select * from productdb ";
                                                    $query = mysqli_query($con,$selectquery);
                                                    while($result = mysqli_fetch_array($query)){
                                                ?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="<?php echo "checkbox".$i; ?>" value="<?php echo $result['id'];?>" name="product[]">
                                                    <label class="custom-control-label" for="<?php echo "checkbox".$i; ?>"><?php echo $result['productName'];?></label>
                                                </div>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <input type="submit" name="update" value="ADD" class="btn btn-success"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Footerbar -->
                        <!-- <div class="col-lg-12">
                                <div class="footerbar">
                                    <footer class="footer">
                                        <p class="mb-0">© <span id="year"></span> OfferPlant,Chhapra - All Rights
                                            Reserved.</p>
                                    </footer>
                                </div>
                            </div> -->
                        <!-- End Footerbar -->
                    </div>
                </div>
                <!-- End Rightbar -->
            </div>
        </div>
    </div>
    </div>
    <?php
        // print_r($_POST);
        if(isset($_POST['update'])) {
            $idupdate = $_GET['id'];
            $cname = $_POST['name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $cgroup = $_POST['cgroup'];
            $product=$_POST['product'];
            $productlist=implode(",",$product);
            $query = "update customerdb set name='$cname', address='$address', mobileno='$mobile', customerGroup='$cgroup', customerProduct='$productlist' where id=$idupdate";
            $res = mysqli_query($con, $query);          
            if ($res) {
        ?>
                <script>
                    alert("data updated properly");
                    window.location.href='customers.php';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not updated properly");
                </script>
            <?php
            }
        }
    ?>
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
    <script type="text/javascript">
        $(document).ready(function(){
        $('#tabledata').DataTable();
        });
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

<!-- Mirrored from sbtechnosoft.com/multinod/v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 May 2021 04:01:50 GMT -->

</html>