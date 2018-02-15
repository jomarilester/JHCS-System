<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Inventory Stocks</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
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
                                                <li class="active">
                                                    <a href="./inventorystocks.php">
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
                                                <li class="">
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
                                            <th><b class="pull-left">Item Code</b></th>
                                            <th><b class="pull-left">Name</b></th>
                                            <th><b class="pull-left">Reorder Level (grams)</b></th>
                                            <th><b class="pull-left">Stock Limit (grams)</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Number of Stocks (per grams)</b></th>
                                            <th><b class="pull-left">Cue Card</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>Coffee A</td>
                                                <td>5000 g</td>
                                                <td>10000 g</td>
                                                <td>Supplier A</td>
                                                <td>8000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="rawcard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Cue Card Details</h4>
                                                        </div>
                                                      <div class="modal-body" style="padding: 5px;">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                                <h3><b>Coffee A</b></h3>
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
                                                            <th><b>Client/Supplier</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Quantity/Weight</b></th>
                                                            <th><b>Type</b></th>
                                                            <th><b>Remarks</b></th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>12345</td>
                                                            <td>In</td>
                                                            <td>Supplier 1</td>
                                                            <td>Dec 5, 2017</td>
                                                            <td>100 grams</td>
                                                            <td>City Roast</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>23456</td>
                                                            <td>In</td>
                                                            <td>Client 2</td>
                                                            <td>Dec 12, 2017</td>
                                                            <td>20 grams</td>
                                                            <td>City Roast</td>
                                                            <td>Incorrect Blend</td>
                                                          </tr>
                                                          <tr>
                                                            <td>34567</td>
                                                            <td>In</td>
                                                            <td>Supplier 3</td>
                                                            <td>Dec 15, 2017</td>
                                                            <td>200 grams</td>
                                                            <td>City Roast</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>45678</td>
                                                            <td>Out</td>
                                                            <td>Supplier 1</td>
                                                            <td>Dec 8, 2017</td>
                                                            <td>100 grams</td>
                                                            <td>City Roast</td>
                                                            <td>Incorrect Roast</td>
                                                          </tr>
                                                          <tr>
                                                            <td>56789</td>
                                                            <td>Out</td>
                                                            <td>Client 5</td>
                                                            <td>Dec 9, 2017</td>
                                                            <td>50 grams</td>
                                                            <td>City Roast</td>
                                                            <td></td>
                                                          </tr>
                                                          <tr>
                                                            <td>67890</td>
                                                            <td>Out</td>
                                                            <td>Client 7</td>
                                                            <td>Dec 17, 2017</td>
                                                            <td>30 grams</td>
                                                            <td>City Roast</td>
                                                            <td>Sample</td>
                                                          </tr>
                                                        </tbody>
                                                      </table><hr>
                                                          <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-offset-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total In :</label>
                                                                    <div class="col-md-4">
                                                                        <p>320 grams</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Total Out :</label>
                                                                    <div class="col-md-7">
                                                                        <p>180 grams</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control">Ending Inventory :</label>
                                                                    <div class="col-md-5">
                                                                        <p>140 grams</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Physical Count :</label>
                                                                        <div class="col-md-4">
                                                                            <input id="" name="count" type="number" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Discrepancy :</label>
                                                                        <div class="col-md-4">
                                                                            <input placeholder="0 grams" class="form-control" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Remarks :</label>
                                                                        <div class="col-md-10">
                                                                            <textarea style="resize:vertical;" class="form-control" rows="2" name="remarks"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">OK</button>
                                                          <button style="float: right;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>000002</td>
                                                <td>Coffee B</td>
                                                <td>5000 kg</td>
                                                <td>15000 g</td>
                                                <td>supplier B</td>
                                                <td>6000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>000003</td>
                                                <td>Coffee C</td>
                                                <td>5000 kg</td>
                                                <td>15000 g</td>
                                                <td>supplier C</td>
                                                <td>6000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>000004</td>
                                                <td>Coffee D</td>
                                                <td>5000 kg</td>
                                                <td>15000 g</td>
                                                <td>supplier D</td>
                                                <td>6000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>000005</td>
                                                <td>Coffee E</td>
                                                <td>5000 kg</td>
                                                <td>15000 g</td>
                                                <td>supplier E</td>
                                                <td>6000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>000007</td>
                                                <td>Coffee F</td>
                                                <td>3000 kg</td>
                                                <td>15000 g</td>
                                                <td>supplier E</td>
                                                <td>6000 g</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rawcard">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>38000 g</td>
                                                <td></td>
                                                <td></td>
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