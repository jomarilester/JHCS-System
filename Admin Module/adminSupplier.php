<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Suppliers</title>
    <!--   Style   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fresh-datatables.css">
    <!--   Fonts   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!--   Style   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fresh-datatables.css">
    <!--   Fonts   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<style>
/*
        td.highlight {
            background-color: whitesmoke !important;
        }
*/

.table thead,
thead th {
    text-align: center;
    font-size: 120%;
}


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

.navbar {
    background-color: chartreuse;
}
</style>

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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>adminSupplier">
                            <i class="material-icons">person</i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <li>
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
        
            <div class="modal fade" id="contact" tabindex="1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign" ></span> Create New Account</h4>
                        </div>
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding-left: 100px;">
                                <h6> Personal Information </h6>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="supplier" placeholder="Supplier" type="text" required autofocus />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="contactpersonnel" placeholder="Contact Personnel" type="text" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                            <input class="form-control" name="position " placeholder="Position" type="text" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="email" placeholder="Email" type="text" required />
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <input class="form-control" name="tel number" placeholder="Telephone Number" type="text" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-12 col-sm-12">
                                        <textarea style="resize:vertical;" class="form-control" placeholder="Address" rows="2" name="address" required></textarea>
                                    </div>
                                </div>
                                <h6> Product </h6>
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                                        <select class="form-control" name="position" placeholder="Position" type="text" required>
                                            <option>Brown Bag</option>
                                            <option>Clear Bag</option>
                                        </select>
                                    </div>
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
                                                            <label for="type">Supplier</label>
                                                            <input class="form-control" type="textarea" value="La Festive Trading, Inc." id="example-number-input">
                                                        </div>
                                                    </div>
                                                        
                                                         <p><div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Address</label>
                                                            <input class="form-control" type="textarea" value="Legarda" id="example-number-input">
                                                        </div>
                                                    </div>
                                                        <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Email</label>
                                                            <input class="form-control" type="textarea" value="lafestive@gmail.com" id="example-number-input">
                                                        </div>
                                                    </div>
                                                        <div class="form-group row">
                                                        <div for="example-number-input" class="col-2 col-form-label">
                                                            <label for="type">Telephone Number</label>
                                                            <input class="form-control" type="number" value="442-1234" id="example-number-input">
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                            <label class="control-label">Product</label>
                                                            <select class="form-control" name="Category" placeholder="Category" type="text" required>
                                                                <option>Brown Bag</option>
                                                                <option>Clear Bag</option>
                                                            </select>
                                                        </div>
                                                    <div class="form-group row">
                                                         <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Contact Personnel</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="textarea" value="Aeneid Adversalo" id="example-number-input">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <label for="example-number-input" class="col-2 col-form-label">Position</label>
                                                            <div class="col-10">
                                                                <input class="form-control" type="textarea" value="Manager" id="example-number-input">
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
        
            <div class="content" style="margin-top: 0px;">
                <div class="container-fluid">
                    <div class="card">
                        <div class="modal fade" id="deactivate" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-warning-sign"></span> Deactivation </h4>
                                            </div>
                                            
                                                <div class="modal-body" style="padding: 5px;">
                                                    
                                                    
                                                    
                                                    <div class="row" style="text-align: center">
                                                        <br>
                                                        <h4> Are you sure you want to deactivate this client?</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-danger" value="Yes" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button type="button" class="btn btn-success btn-close" data-dismiss="modal">No</button>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="archive" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-address-book"></span> Archiving </h4>
                                            </div>
                                            
                                                <div class="modal-body" style="padding: 5px;">
                                                    
                                                    
                                                    
                                                    <div class="row" style="text-align: center">
                                                        <br>
                                                        <h4> Are you sure you want to archive this client?</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-danger" value="Yes" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button type="button" class="btn btn-success btn-close" data-dismiss="modal">No</button>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="blacklist" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-database-ban"></span> Blacklist </h4>
                                            </div>
                                            
                                                <div class="modal-body" style="padding: 5px;">
                                                    
                                                    
                                                    
                                                    <div class="row" style="text-align: center">
                                                        <br>
                                                        <h4> Are you sure you want to blacklist this client?</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="panel-footer" style="margin-bottom:-14px;">
                                                    <input type="submit" class="btn btn-danger" value="Yes" />
                                                    <!--<span class="glyphicon glyphicon-ok"></span>-->
                                                    
                                                    <!--<span class="glyphicon glyphicon-remove"></span>-->
                                                    <button type="button" class="btn btn-success btn-close" data-dismiss="modal">No</button>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                         <div class="card-header " data-background-color="green">
                                <h4 class="title">List of Suppliers
                                     </h4>
                            </div>
                        <div class="card-content table-responsive">
                              <a href="newsuppliers.html" class="btn btn-success" data-original-title style="float: right"> Create New Account</a>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fresh-datatables">
                                    <!--  Available colors for the full background: full-color-blue, full-color-azure, full-color-purple, full-color-red, full-color-orange, full-color-purple, full-color-gray
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-purple, toolbar-color-red, toolbar-color-orange, toolbar-color-purple, toolbar-color-gray -->
                                    <table id="fresh-datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th><b>Supplier No.</b></th>
                                                <th><b>Supplier</b></th>
                                                <th><b>Product</b></th>
                                                <th><b>Contact Personnel</b></th>
                                                <th><b>Position</b></th>
                                                <th><b>Address</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>Telephone No.</b></th>
                                                <th><b class="pull-left">Actions</b></th>
                                                <th class="disabled-sorting"><b>Edit</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SN 1</td>
                                                <td>La Festive Trading, Inc</td>
                                                <td>Clear Bags</td>
                                                <td>Aeneid Adversalo</td>
                                                <td>Manager</td>
                                                <td>Legarda</td>
                                                <td>lafestive@gmail.com</td>
                                                <td>442-1234</td>
                                                <td>
                                                    <span data-toggle="modal" data-target="#deactivate">
                                                    <a href="#" class="deactivate" data-toggle="tooltip" data-placement="bottom" title="Deactivate"><i class="fa fa-close"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#archive">
                                                    <a href="#" class="archive" data-toggle="tooltip" data-placement="bottom" title="Archive"><i class="fa fa-archive"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#blacklist">
                                                    <a href="#" class="blacklist" data-toggle="tooltip" data-placement="bottom" title="Blacklist"><i class="fa fa-ban"></i></a></span>
                                                </td>
                                                 <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SN 2</td>
                                                <td>Lila Enterprise</td>
                                                <td>Stickers</td>
                                                <td>Jeanne Dullao</td>
                                                <td>Manager</td>
                                                <td>Loakan Proper</td>
                                                <td>lila1022@gmail.com</td>
                                                <td>442-5248</td>
                                                <td>
                                                    <span data-toggle="modal" data-target="#deactivate">
                                                    <a href="#" class="deactivate" data-toggle="tooltip" data-placement="bottom" title="Deactivate"><i class="fa fa-close"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#archive">
                                                    <a href="#" class="archive" data-toggle="tooltip" data-placement="bottom" title="Archive"><i class="fa fa-archive"></i></a></span>
                                                    <span data-toggle="modal" data-target="#blacklist">
                                                    <a href="#" class="blacklist" data-toggle="tooltip" data-placement="bottom" title="Blacklist"><i class="fa fa-ban"></i></a> </span>
                                                </td>
                                                 <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SN 3</td>
                                                <td>Lanz Trading, Inc</td>
                                                <td>Machines</td>
                                                <td>Tinz Caguioa</td>
                                                <td>Manager</td>
                                                <td>Labsan</td>
                                                <td>lanz_01@gmail.com</td>
                                                <td>442-5896</td>
                                                <td>
                                                    <span data-toggle="modal" data-target="#deactivate">
                                                    <a href="#" class="deactivate" data-toggle="tooltip" data-placement="bottom" title="Deactivate"><i class="fa fa-close"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#archive">
                                                    <a href="#" class="archive" data-toggle="tooltip" data-placement="bottom" title="Archive"><i class="fa fa-archive"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#blacklist">
                                                    <a href="#" class="blacklist" data-toggle="tooltip" data-placement="bottom" title="Blacklist"><i class="fa fa-ban"></i></a> </span>
                                                </td>
                                                 <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SN 4</td>
                                                <td>Tinz Enterprise</td>
                                                <td>Raw Coffee Beans</td>
                                                <td>Leo Malicdem</td>
                                                <td>Manager</td>
                                                <td>Quirino Hill</td>
                                                <td>tinzenterprise@gmail.com</td>
                                                <td>442-5895</td>
                                                <td>
                                                    <span data-toggle="modal" data-target="#deactivate">
                                                    <a href="#" class="deactivate" data-toggle="tooltip" data-placement="bottom" title="Deactivate"><i class="fa fa-close"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#archive">
                                                    <a href="#" class="archive" data-toggle="tooltip" data-placement="bottom" title="Archive"><i class="fa fa-archive"></i></a> </span>
                                                    <span data-toggle="modal" data-target="#blacklist">
                                                    <a href="#" class="blacklist" data-toggle="tooltip" data-placement="bottom" title="Blacklist"><i class="fa fa-ban"></i></a> </span>
                                                </td>
                                                 <td>
                                                                <a class="btn btn-warning btn-sm" style="margin-top: 0px" data-toggle="modal" data-target="#edit">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
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
    $('[data-toggle="tooltip"]').tooltip();   
    $('#fresh-datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#fresh-datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });
});
</script>
<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})
</script>

</html>