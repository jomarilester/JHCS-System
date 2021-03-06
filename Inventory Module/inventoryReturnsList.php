<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Company Returns</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
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
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
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
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryItemList.php">
                            <i class="material-icons">storage</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li class="active">
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
                                <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Return</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Date</label>
                                                                <input class="form-control" type="date" name="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Supplier</label>
                                                                <select class="form-control" name="supplier" required>
                                                                    <option value="">Supplier 1</option>
                                                                    <option value="">Supplier 2</option>
                                                                    <option value="">Supplier 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee A</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee B</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee C</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee D</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee E</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Coffee F</label>
                                                                <input class="form-control" type="number" name="" placeholder="grams" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <label for="email">Remarks</label>
                                                            <textarea style="resize:vertical;" class="form-control" rows="3" name="remarks"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-success" value="Add" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    <input type="reset" class="btn btn-danger" value="Clear" />
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <span> </span>
                                                <li class="active">
                                                    <a href="./returnslist.php">
                                                        <i class="material-icons">home</i> Company Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./clientreturn.php">
                                                        <i class="material-icons">group</i> Client Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#contact" data-original-title style="float: right">Add Returns</a>
                                    <div class="card-content table-responsive">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="fresh-datatables">
                                                <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                                <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Company Return No.</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Supplier</b></th>
                                                            <th><b>Total</b></th>
                                                            <th><b>Coffee A</b></th>
                                                            <th><b>Coffee B</b></th>
                                                            <th><b>Coffee C</b></th>
                                                            <th><b>Coffee D</b></th>
                                                            <th><b>Coffee E</b></th>
                                                            <th><b>Coffee F</b></th>
                                                            <th><b>Remarks</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>00001</td>
                                                            <td>Oct 1, 2017</td>
                                                            <td>Supplier 1</td>
                                                            <td>300 g</td>
                                                            <td>100</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>200</td>
                                                            <td>-</td>
                                                            <td>Incorrect Roast</td>
                                                        </tr>
                                                        <tr>
                                                            <td>00002</td>
                                                            <td>Oct 3, 2017</td>
                                                            <td>Supplier 2</td>
                                                            <td>500 g</td>
                                                            <td>-</td>
                                                            <td>300</td>
                                                            <td>-</td>
                                                            <td>100</td>
                                                            <td>-</td>
                                                            <td>100</td>
                                                            <td>Spoiled</td>
                                                        </tr>
                                                        <tr>
                                                            <td>00003</td>
                                                            <td>Oct 5, 2017</td>
                                                            <td>Supplier 3</td>
                                                            <td>600 g</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>400</td>
                                                            <td>-</td>
                                                            <td>200</td>
                                                            <td>-</td>
                                                            <td>Incorrect Roast</td>
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
    </div>
    </div>
    </div>
</body>
<!--   Core JS Files   -->
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>
<script>
$(document).ready(function() {
    $('#fresh-datatables').DataTable({
        select: {
            style: 'single'
        }

    });
});
</script>

</html>