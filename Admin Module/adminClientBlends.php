<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Blends</title>
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
                                <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Change Price of Current Blend</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                
                                                                <label for="email">Old Price (Peso)</label>
                                                                <input class="form-control" type="number" name="" placeholder=""/>
                  
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                
                                                                <label for="email">New Price (Peso)</label>
                                                                <input class="form-control" type="number" name="" placeholder=""/>
                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row">
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-success" value="Change Price" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="newblend" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Add New Client Blend</h4>
                                            </div>
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Blend Name</label>
                                                                <input class="form-control" type="text" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <div class="form-group label-floating">
                                                                
                                                                <label for="email">Client</label>
                                                                <select class="form-control" name="supplier" required>
                                                                    <option value="">Mario's</option>
                                                                    <option value="">Le Chef</option>
                                                                    <option value="">Pizza Volante</option>
                                                                </select>                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <div class="form-group label-floating">
                                                                <label for="email">Price Per Unit</label>
                                                                <input class="form-control" type="number" name="" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h3><b><center>Proportions</center></b><h3>
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
                                <div class="card-header" data-background-color="green">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs" data-background-color="green">
                                                <li class="">
                                                    <a href="./product_inventory.php">
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
                                                    <a href="./stickers.php">
                                                        Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
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
                                    <a class="btn btn-success" data-toggle="modal" data-target="#newblend" data-original-title style="float: right">Add New Blend</a>
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Type of Blend</b></th>
                                            <th><b class="pull-left">Raw Coffee A</b></th>
                                            <th><b class="pull-left">Raw Coffee B</b></th>
                                            <th><b class="pull-left">Raw Coffee C</b></th>
                                            <th><b class="pull-left">Raw Coffee D</b></th>
                                            <th><b class="pull-left">Raw Coffee E</b></th>
                                            <th><b class="pull-left">Raw Coffee F</b></th>
                                            <th><b class="pull-left">Attributed To</b></th>
                                            <th><b class="pull-left">Price Per Unit (gram)</b></th>
                                            <th><b class="pull-left">Action</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>The Manor Blend</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td>50%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td></td>
                                                <td>The Manor</td>
                                                <td>30</td>
                                                <td> <a class="btn btn-success" data-toggle="modal" data-target="#contact" data-original-title >Change Price</a></td>
                                            </tr>
                                            <tr>
                                                <td>Pizza Volante Blend</td>
                                                <td>20%</td>
                                                <td>15%</td>
                                                <td>50%</td>
                                                <td></td>
                                                <td>15%</td>
                                                <td></td>
                                                <td>Pizza Volante</td>
                                                <td>30</td>
                                                <td> <a class="btn btn-success" data-toggle="modal" data-target="#contact" data-original-title >Change Price</a></td>
                                            </tr>
                                            <tr>
                                                <td>Mario's Blend</td>
                                                <td>30%</td>
                                                <td></td>
                                                <td>10%</td>
                                                <td></td>
                                                <td>60%</td>
                                                <td></td>
                                                <td>Mario's</td>
                                                <td>30</td>
                                                <td> <a class="btn btn-success" data-toggle="modal" data-target="#contact" data-original-title >Change Price</a></td>
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