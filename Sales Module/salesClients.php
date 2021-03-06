<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Clients</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../assets/css/bootstrap-toggle.css" rel="stylesheet" />
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

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="../assets/img/logo.png" alt="image1" width="250px" height="150px">
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
                        <a href="./walkin.php">
                            <i class="material-icons">shopping_basket</i>
                            <p>Sell Products</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./clients.php">
                            <i class="material-icons">supervisor_account</i>
                            <p>Clients</p>
                        </a>
                    </li>
					<li>
                        <a href="./returns.php">
                            <i class="material-icons">assignment_return</i>
                            <p>Returns</p>
                        </a>
                    </li>
					<li >
                        <a href="./pendelivery.php">
                            <i class="material-icons">local_shipping</i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li>
                        <a href="./receivables.php">
                            <i class="material-icons">library_books</i>
                            <p>Receivables</p>
                        </a>
                    </li>
                    <li>
                        <a href="./collections.php">
                            <i class="material-icons">bubble_chart</i>
                            <p>Collections</p>
                        </a>
                    </li>
                    <li>
                        <a href="./sales.php">
                            <i class="material-icons">assessment</i>
                            <p>Sales Summary</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
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
                        <div class="col-sm-12">
                            <div class="card">
                                <center>
                                    <div class="card-header" data-background-color="purple">
                                        <h2 class="title"><center>Contracted Clients</center></h2>
                                    </div>
                                    <div class="card-content">
                                        <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <th><b class="pull-left">Client</b></th>
                                                <th><b class="pull-left"> Client Type</b></th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>The Legend Villas</td>
                                                    <td>Pizza Volante</td>
                                                    <td><a href="./clientsinfo.php" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Boracay</td>
                                                    <td>Coffee Service</td>
                                                    <td><a href="./clientsinfo.php" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Pizza Volante</td>
                                                    <td>Coffee Service</td>
                                                    <td><a href="./clientsinfo.php" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mario's</td>
                                                    <td>Coffee Service</td>
                                                    <td><a href="./clientsinfo.php" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>True Blends</td>
                                                    <td>Retail</td>
                                                    <td><a href="./clientsinfo.php" class="btn btn-primary btn-round btn-sm">View Details<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
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
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable();


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