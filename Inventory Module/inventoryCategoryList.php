<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/img/apple-icon.png"); ?>" />
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/favicon.png"); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Category List</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.dataTable.min.css"); ?>" />
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/material-dashboard.css?v=1.2.0"); ?>" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/demo.css"); ?>" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<style type="text/css">
/* Custom Style */

.onoffswitch {
    position: relative;
    width: 110px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}

.onoffswitch-checkbox {
    display: none;
}

.onoffswitch-label {
    display: block;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid #999999;
    border-radius: 20px;
}

.onoffswitch-inner {
    display: block;
    width: 200%;
    margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s;
    -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s;
    transition: margin 0.3s ease-in 0s;
}

.onoffswitch-inner:before,
.onoffswitch-inner:after {
    display: block;
    float: left;
    width: 50%;
    height: 30px;
    padding: 0;
    line-height: 30px;
    font-size: 14px;
    color: white;
    font-family: Trebuchet, Arial, sans-serif;
    font-weight: bold;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.onoffswitch-inner:before {
    content: " Enabled";
    padding-left: 10px;
    background-color: #2FCCFF;
    color: #FFFFFF;
}

.onoffswitch-inner:after {
    content: "Disabled";
    padding-right: 10px;
    background-color: #EEEEEE;
    color: #999999;
    text-align: right;
}

.onoffswitch-switch {
    display: block;
    width: 18px;
    margin: 7px;
    background: #FFFFFF;
    border: 2px solid #999999;
    border-radius: 20px;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 70px;
    -moz-transition: all 0.3s ease-in 0s;
    -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s;
    transition: all 0.3s ease-in 0s;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}

.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
    right: 0px;
}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url("assets/img/sidebar-0.jpg"); ?>">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?php echo base_url("assets/img/logo.png"); ?>" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryStocks.php">
                            <i class="material-icons">assessment</i>
                            <p>Inventory Stocks</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryInventoryReport.php">
                            <i class="material-icons">content_paste</i>
                            <p>Inventory Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryPOAdd.php">
                            <i class="material-icons">shopping cart</i>
                            <p>Purchase Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee.php">
                            <i class="material-icons">reply</i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryItemList.php">
                            <i class="material-icons">storage</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryReturnsList.php">
                            <i class="material-icons">input</i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventorySamplesList.php">
                            <i class="material-icons">dvr</i>
                            <p>Samples</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <li>
                                    <p class="title">Hi, User 1</p>
                                </li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="./user.php">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="./changepassword.php">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="./activitylogs.php">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">                            
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="">
                                                    <a href="./itemlist.php">
                                                        <i class="material-icons">list</i> Items
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="./categorylist.php">
                                                        <i class="material-icons">local_shipping</i> Supplier
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./List.php">
                                                        <i class="material-icons">bubble_chart</i> Category and Type
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="type">
                                            <div class="col-sm-13">
                                                <div class="card-content">
                                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <th><b class="pull-left">Supplier ID</b></th>
                                                            <th><b class="pull-left">Supplier Company Name</b></th>
                                                            <th><b class="pull-left">Products</b></th>
                                                            <th><b class="pull-left">Contact Personnel</b></th>
                                                            <th><b class="pull-left">Position</b></th>
                                                            <th><b class="pull-left">Contact Number</b></th>
                                                            <th><b class="pull-left">Email Address</b></th>
                                                            <th><b class="pull-left">Activation</b></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>123456781</td>
                                                                <td>Supplier 1</td>
                                                                <td>Stickers</td>
                                                                <td>Mel Arciosa</td>
                                                                <td>Manager</td>
                                                                <td>09000000000</td>
                                                                <td>mel@gmail.com</td>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>123456782</td>
                                                                <td>Supplier 2</td>
                                                                <td>Packaging</td>
                                                                <td>Tin Caguioa</td>
                                                                <td>Manager</td>
                                                                <td>09000000001</td>
                                                                <td>tin@gmail.com</td>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>123456783</td>
                                                                <td>Supplier 3</td>
                                                                <td>Raw Coffee A</td>
                                                                <td>Lila Fernandez</td>
                                                                <td>Accountant</td>
                                                                <td>09090000000</td>
                                                                <td>lila@gmail.com</td>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>123456784</td>
                                                                <td>Supplier 4</td>
                                                                <td>Raw Coffee B</td>
                                                                <td>Jom Julhusin</td>
                                                                <td>Sales Clerk</td>
                                                                <td>09060606000</td>
                                                                <td>jom@gmail.com</td>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>123456785</td>
                                                                <td>Supplier 5</td>
                                                                <td>Machine C</td>
                                                                <td>Avy Maslian</td>
                                                                <td>Inventory Custodian</td>
                                                                <td>090909099099</td>
                                                                <td>avy@gmail.com</td>
                                                                <td>
                                                                    <div class="onoffswitch">
                                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                                        <label class="onoffswitch-label" for="myonoffswitch">
                                                                            <span class="onoffswitch-inner"></span>
                                                                            <span class="onoffswitch-switch"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                                    Home
                                </a>
                    </li>
                    <li>
                        <a href="#">
                                    Company
                                </a>
                    </li>
                    <li>
                        <a href="#">
                                    Portfolio
                                </a>
                    </li>
                    <li>
                        <a href="#">
                                    Blog
                                </a>
                    </li>
                </ul>
            </nav>
            <p class="copyright pull-right">
                &copy;
                <script>
                document.write(new Date().getFullYear())
                </script>
                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
            </p>
        </div>
    </footer>
    </div>
    </div>
</body>
<!--   Core JS Files   -->
<!--
    <script src="<?php echo base_url("assets/js/jquery-1.12.4.js"); ?>" type="text/javascript"></script>
-->
<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/material.min.js"); ?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url("assets/js/chartist.min.js"); ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url("assets/js/arrive.min.js"); ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url("assets/js/perfect-scrollbar.jquery.min.js"); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url("assets/js/bootstrap-notify.js"); ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url("assets/js/material-dashboard.js?v=1.2.0"); ?>"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("assets/js/demo.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.datatables.js"); ?>"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        select: {
            style: 'single'
        }

    });
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });


});
</script>
</html>