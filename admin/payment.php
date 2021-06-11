<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUNRISE HOTEL</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <style>
        table,
        th,
        td {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding: 5%;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="settings.php"> <i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
                    <li>
                        <a href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Payment Details<small> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->


                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ชื่อ</th>
                                                <th>ห้องประเภท</th>
                                                <th>เตียงประเภท</th>
                                                <th>เช็คอิน</th>
                                                <th>เช็คเอาท์</th>
                                                <th>ห้องหมายเลข</th>
                                                <th>มื้ออาหาร</th>
                                                <th>ค่าเช่าห้อง</th>
                                                <th>ค่าเช่าเตียง</th>
                                                <th>ค่าอาหาร </th>
                                                <th>รวมทั้งหมด</th>
                                                <th>พิมพิ์</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include('db.php');
                                            $sql = "select * from payment";
                                            $re = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($re)) {

                                                $id = $row['id'];

                                                if ($id % 2 == 1) {
                                                    echo "<tr class='gradeC'>
													<td>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
													<td>" . $row['troom'] . "</td>
													<td>" . $row['tbed'] . "</td>
													<td>" . $row['cin'] . "</td>
													<td>" . $row['cout'] . "</td>
													<td>" . $row['nroom'] . "</td>
													<td>" . $row['meal'] . "</td>
													
													<td>" . $row['ttot'] . "</td>
													<td>" . $row['mepr'] . "</td>
													<td>" . $row['btot'] . "</td>
													<td>" . $row['fintot'] . "</td>
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                                } else {
                                                    echo "<tr class='gradeU'>
													<td>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
													<td>" . $row['troom'] . "</td>
													<td>" . $row['tbed'] . "</td>
													<td>" . $row['cin'] . "</td>
													<td>" . $row['cout'] . "</td>
													<td>" . $row['nroom'] . "</td>
													<td>" . $row['meal'] . "</td>
													
													<td>" . $row['ttot'] . "</td>
													<td>" . $row['mepr'] . "</td>
													<td>" . $row['btot'] . "</td>
													<td>" . $row['fintot'] . "</td>
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->

                        <!-- Start Show Recepit-->
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-header">
                                    Show recepit <small> </small>
                                </h1>
                            </div>
                        </div>
                        <!-- TABLE -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                         
                                                <th> เบอร์โทรศัพท์ </th>
                                                <th> วันที่ใบเสร็จ </th>
                                                <th> รูปใบเสร็จ </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('db.php');
                                            $show_recepit = "SELECT * FROM recepit";
                                            $show_recepit_query = mysqli_query($con, $show_recepit);
                                            while ($row2 = mysqli_fetch_assoc($show_recepit_query)) {
                                                $id = $row2['ID'];
                                                if ($id % 2 == 1) {
                                                    echo "<tr class='gradeC'>
                                        
                                                    <td>" . $row2['Phone'] . "</td>
                                                    <td>" . $row2['date'] . "</td>
                                                    <td> <img src='file/" . $row2['recepit'] . "' width=20%> </td>
                                                        </tr>";
                                                } else {
                                                    echo "<tr class='gradeU'>
                                                    <td> NAME </td>
                                                    <td>" . $row2['Phone'] . "</td>
                                                    <td>" . $row2['date'] . "</td>
                                                    <td> <img src='file/" . $row2['recepit'] . "' width=20%> </td>
                                                        </tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>
                <!-- /. ROW  -->

            </div>

        </div>


    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>