<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Stickers</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/FileExport/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/FileExport/jquery.dataTables.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="css.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo ">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./itemlist.php">
                            <i class="material-icons">list</i>
                            <p>Item</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./product_inventory.php">
                            <i class="material-icons">assessment</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li>
                        <a href="./accounts.php">
                            <i class="material-icons">account_circle</i>
                            <p>User Accounts</p>
                        </a>
                    </li>
                    <li>
                        <a href="./clients.php">
                            <i class="material-icons">person</i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="./supplier.php">
                            <i class="material-icons">person</i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li>
                        <a href="./sales_report.php">
                            <i class="material-icons">library_books</i>
                            <p>Reports</p>
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
                                    <p class="title">Hi, Player!</p>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs" data-background-color="green">
                                                <li>
                                                    <a href="./product_inventory.php">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="./blends.php">
                                                        Existing Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
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
                                                <li class="active">
                                                    <a href="./stickers.php">
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
                                            <th><b class="pull-left">Sticker</b></th>
                                            <th><b class="pull-left">Reorder Level (per pc)</b></th>
                                            <th><b class="pull-left">Stock Limit (per pc)</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Number of Stocks (per pc)</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Coffee A Sticker</td>
                                                <td>20</td>
                                                <td>300</td>
                                                <td>Supplier A</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee B Sticker</td>
                                                <td>20</td>
                                                <td>400</td>
                                                <td>supplier B</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee C Sticker</td>
                                                <td>100</td>
                                                <td>500</td>
                                                <td>supplier B</td>
                                                <td>250</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee D Sticker</td>
                                                <td>50</td>
                                                <td>400</td>
                                                <td>supplier B</td>
                                                <td>91</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee E Sticker</td>
                                                <td>80</td>
                                                <td>400</td>
                                                <td>supplier B</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>Coffee F Sticker</td>
                                                <td>50</td>
                                                <td>300</td>
                                                <td>supplier B</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Company A Blend</td>
                                                <td>10</td>
                                                <td>150</td>
                                                <td>supplier A</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Company B Blend</td>
                                                <td>15</td>
                                                <td>200</td>
                                                <td>supplier D</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Company C Blend</td>
                                                <td>50</td>
                                                <td>300</td>
                                                <td>Supplier C</td>
                                                <td>130</td>
                                            </tr>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>901 </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.php5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {

    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

});
</script>

</html>