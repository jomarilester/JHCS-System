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
    <title>Inventory Stocks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
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
                                        <a href="<?php echo base_url(); ?>inventoryUser.php">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword.php">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs.php">Activity Logs</a>
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
                                                    <a href="<?php echo base_url(); ?>inventoryStocks.php">
                                                        Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>inventoryBlends.php">
                                                        Existing Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryClientBlends.php">
                                                        Client Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryPackaging.php">
                                                        Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryStickers.php">
                                                        Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <span></span>
                                                <li class="">
                                                    <a href="<?php echo base_url(); ?>inventoryMachines.php">
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
                                            <th><b class="pull-left">Cue Card</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Blend A</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td>50%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="machinecard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Cue Card Details</h4>
                                                        </div>
                                                      <div class="modal-body" style="padding: 5px;">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                                <h3><b>Blend A</b></h3>
                                                                <hr>
                                                            </div>
                                                          <label>Set Date from </label>
                                                            <input type="date" name="">
                                                            <label> to </label>
                                                            <input type="date" name="">
                                                          <button style="float: right;" class ="print"><i class="material-icons">print</i></button>
                                                        <div id="toBePrinted">
                                                        <table id="fresh-datatables" class="table table-striped table-hover responsive" cellspacing="0" width="100%">
                                                        <thead>
                                                          <tr>
                                                            <th><b>Delivery Receipt No.</b></th>
                                                            <th><b>Delivery</b></th>
                                                            <th><b>Client</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Quantity</b></th>
                                                            <th><b>Remarks</b></th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>12345</td>
                                                            <td>Out</td>
                                                            <td>Client 1</td>
                                                            <td>Dec 5, 2017</td>
                                                            <td>250 grams</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>23456</td>
                                                            <td>Out</td>
                                                            <td>Client 2</td>
                                                            <td>Dec 12, 2017</td>
                                                            <td>500 grams</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>34567</td>
                                                            <td>In</td>
                                                            <td>Client 3</td>
                                                            <td>Dec 15, 2017</td>
                                                            <td>8 pcs</td>
                                                            <td>Spoiled</td>
                                                          </tr>
                                                          <tr>
                                                            <td>45678</td>
                                                            <td>Out</td>
                                                            <td>Client 4</td>
                                                            <td>Dec 8, 2017</td>
                                                            <td>2 pcs</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>56789</td>
                                                            <td>Out</td>
                                                            <td>Client 5</td>
                                                            <td>Dec 9, 2017</td>
                                                            <td>4 pcs</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>67890</td>
                                                            <td>In</td>
                                                            <td>Client 6</td>
                                                            <td>Dec 17, 2017</td>
                                                            <td>6 pcs</td>
                                                            <td>Spoiled</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend B</td>
                                                <td></td>
                                                <td>10%</td>
                                                <td>10%</td>
                                                <td>50%</td>
                                                <td>10%</td>
                                                <td>20%</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend C</td>
                                                <td>10%</td>
                                                <td></td>
                                                <td></td>
                                                <td>50%</td>
                                                <td></td>
                                                <td>40%</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend D</td>
                                                <td>30%</td>
                                                <td></td>
                                                <td>40%</td>
                                                <td>20%</td>
                                                <td>10%</td>
                                                <td></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend E</td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>20%</td>
                                                <td>10%</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend F</td>
                                                <td></td>
                                                <td>50%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend G</td>
                                                <td>40%</td>
                                                <td>10%</td>
                                                <td>20%</td>
                                                <td>30%</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blend H</td>
                                                <td></td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td>30%</td>
                                                <td>20%</td>
                                                <td></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#machinecard">Details</button>
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
<script type="text/javascript">
$(document).ready(function() {

    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

});
</script>
<script>
    $('.print').click(function(){
    var printme = document.getElementById('toBePrinted'); 
    
    var wme = window.open("","","width= 900","height=700");
        
    var cancel = document.getElementsByClassName("btn");
    for(var i=0; i < cancel.length; i++){  
    cancel[i].style.visibility = 'hidden';
    }
    wme.document.write(printme.outerHTML);
    wme.document.close();
    wme.focus();
    wme.print();
    wme.close();
    
      
    for(var i=0; i < cancel.length; i++){  
    cancel[i].style.visibility = 'visible';
    }
    
                })
</script> 
</html>