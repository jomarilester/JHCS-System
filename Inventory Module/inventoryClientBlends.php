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
    <title>Inventory Stocks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/material-dashboard.css?v=1.2.0"); ?>" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/demo.css"); ?>" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
</head>
<style>
.title {
    font-size: large;

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
                    <li class="active">
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
                    <li>
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
                                                    <a href="./inventorystocks.php">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="./blends.php">
                                                        Existing Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="./clientblends.php">
                                                        Client Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="./packaging.php">
                                                        Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="./Stickers.php">
                                                        Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="./machines.php">
                                                       Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Type of Blend</b></th>
                                            <th><b class="pull-left">Raw Coffee A</b></th>
                                            <th><b class="pull-left">Raw Coffee B</b></th>
                                            <th><b class="pull-left">Raw Coffee C</b></th>
                                            <th><b class="pull-left">Raw Coffee D</b></th>
                                            <th><b class="pull-left">Raw Coffee E</b></th>
                                            <th><b class="pull-left">Raw Coffee F</b></th>
                                            <th><b class="pull-left">Unit Price</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Client A Blend</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td>50%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td></td>
                                                <td>199</td>
                                            </tr>
                                            <tr>
                                                <td>Client B Blend</td>
                                                <td></td>
                                                <td>10%</td>
                                                <td>10%</td>
                                                <td>50%</td>
                                                <td>10%</td>
                                                <td>20%</td>
                                                <td>250</td>
                                            </tr>
                                            <tr>
                                                <td>Client C Blend</td>
                                                <td>10%</td>
                                                <td></td>
                                                <td></td>
                                                <td>50%</td>
                                                <td></td>
                                                <td>40%</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Client D Blend</td>
                                                <td>30%</td>
                                                <td></td>
                                                <td>40%</td>
                                                <td>20%</td>
                                                <td>10%</td>
                                                <td></td>
                                                <td>350</td>
                                            </tr>
                                            <tr>
                                                <td>Client E Blend</td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>20%</td>
                                                <td>10%</td>
                                                <td>199</td>
                                            </tr>
                                            <tr>
                                                <td>Client F Blend</td>
                                                <td></td>
                                                <td>50%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td></td>
                                                <td>250</td>
                                            </tr>
                                            <tr>
                                                <td>Client G Blend</td>
                                                <td>40%</td>
                                                <td>10%</td>
                                                <td>20%</td>
                                                <td>30%</td>
                                                <td></td>
                                                <td></td>
                                                <td>199</td>
                                            </tr>
                                            <tr>
                                                <td>Client H Blend</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>199</td>
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
</body>
<!--   Core JS Files   -->
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
<script type="text/javascript">
$(document).ready(function() {

    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

});
</script>

</html>