<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Delivery Report</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!--   Fonts   -->
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
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
                        <a href="<?php echo base_url(); ?>adminDashboard">
                            <i class="material-icons">dashboard</i>
                            
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminItemList">
                            <i class="material-icons">list</i>
                            <p>Item</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminProductInventory">
                            <i class="material-icons">assessment</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>adminAccounts">
                            <i class="material-icons">account_circle</i>
                            <p>User Accounts</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminClients">
                            <i class="material-icons">person</i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>adminSupplier">
                            <i class="material-icons">person</i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminSalesReport">
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
                        <a class="navbar-brand" href="#"></a>
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
                                        <a href="<?php echo base_url(); ?>adminUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>adminActivityLogs">Activity Logs</a>
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="content" style="margin-top: -100px;">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">From date:</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">To date:</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
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
                                                                <a href="./sales_report.php">
                                                        Sales Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="">
                                                                <a href="./receivable_report.php">
                                                        Accounts Receivables Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="">
                                                                <a href="./collection_report.php">
                                                        Collection Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="">
                                                                <a href="./inventory_report.php">
                                                        Inventory Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li class="">
                                                                <a href="./order_report.php">
                                                        PO Report
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                            </li>
                                                            <span></span>
                                                            <li  class="active">
                                                                <a href="./delivery_report.php">
                                                        Delivery Report
                                                        <div class="ripple-container"></div>
                                                   </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="modal fade" id="edit" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Edit Item Information</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding-left: 100px;">
                                                    <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Date Delivered</label>
                                                            <input class="form-control" type="textarea" value="03-Nov-16" id="example-number-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Coffee Blend</label>
                                                            <select class="form-control" name="Type" placeholder="Type" type="text" required>
                                                                <option>Farmers Ground</option>
                                                                <option>Fiesta Blend Ground</option>
                                                                <option>Guatamela</option>
                                                                <option>Sumatra</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Bag</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                                <option>Brown Bag</option>
                                                                <option>Clear Bag</option>
                                                            </select>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <label class="control-label">Size</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                                <option>1000 Grams</option>
                                                                <option>500 Grams</option>
                                                                <option>250 Grams</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                         <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Quantity</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="165" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Unit Price</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="160" id="example-number-input">
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Total Amount</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="number" value="Php 28,000.00" id="example-number-input">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Received By</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="textarea" value="Robinin Hod" id="example-number-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="panel-footer" style="margin-bottom:-14px;">
                                                            <input type="submit" class="btn btn-success" value="Add" style="float: right;" />
                                                            <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                            <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                     <table id="example" class="display  hover order-column" cellspacing="0" width="100%" style="font-size: 11px">
                                    <thead>
                                        <tr>
                                            <th><b class="pull-left">Delivery Receipt No.</b></th>
                                            <th><b class="pull-left">Sales Invoice No.</b></th>
                                            <th><b class="pull-left">Purchase Order No.</b></th>
                                            <th><b class="pull-left">Date Delivered</b></th>
                                            <th><b class="pull-left">Coffee Blend</b></th>
                                            <th><b class="pull-left">Bag</b></th>
                                            <th><b class="pull-left">Size</b></th>
                                            <th><b class="pull-left">Quantity</b></th>
                                            <th><b class="pull-left">Unit Price</b></th>
                                            <th><b class="pull-left">Total Amount</b></th>
                                            <th><b>Received By</b></th>
                                            <th class="disabled-sorting">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1946</td>
                                            <td>3246</td>
                                            <td>PO2562</td>
                                            <td>03-Nov-16</td>
                                            <td>Farmers Ground</td>
                                            <td>Brown</td>
                                            <td>250g</td>
                                            <td>175</td>
                                            <td>160</td>
                                            <td>Php 28,000.00</td>
                                            <td>Robin Hod</td>
                                            <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

</html>