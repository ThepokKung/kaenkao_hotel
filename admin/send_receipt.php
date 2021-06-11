<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION KAENKAO HOTEL</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        table,
        tr,
        th {
            width: 50%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding: 5%;
        }

        hr {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    <li>
                        <a href="reservation.php"><i class="fa fa-qrcode"></i> การจองห้องพัก</a>
                    </li>
                    <li>
                        <a href="send_receipt.php" class="active-menu"> <i class="fa fa-qrcode"></i> ยืนยันการชำระเงิน </a>
                    </li>

                </ul>

            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ยืนยันการชำระเงิน <small></small>
                        </h1>
                    </div>
                </div>
                <!--  -->
                <div class="row">
                    <div align="center">
                        <div class="col-md-12">
                            <div class="panel panel-primary">

                                <div class="panel-heading">
                                    ยืนยันการชำระเงิน <small></small>
                                </div>

                                <div class="panel-body">
                                    <form method="post" name="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <!-- START การชำระเงิน -->
                                            <center>
                                                <table class="center">
                                                    <caption>
                                                        <h1> <u> ช่องทางการชำระเงิน </u> </h1>
                                                    </caption>
                                                    <tr>
                                                        <th>
                                                            <h3> ธนาคาร </h3>
                                                        </th>
                                                        <th>
                                                            <h3> หมายเลข </h3>
                                                        </th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="img/K_Bank_logo.jpg" width="50%">
                                                        </td>
                                                        <td>
                                                            <h2> 1234-1235-1234 </h2>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </center>
                                            <hr width="80%" color="black">
                                            <!-- /. HR -->

                                            <!-- STAR REAL FORMM -->
                                            <center>
                                                <h1>
                                                    <u> ส่งสลิฟการโอนเงิน </u>
                                                </h1>
                                                <p></p>
                                                <label for="send_receipt"> ใส่เบอร์โทรศัพท์ที่จอง </label>
                                                <input type="tel" name="phone" id="phone">
                                                <p></p>

                                                <label for="send_recepit"> ไฟล์รูปภาพ </label>
                                                <input type="file" name="receipt" id="send_receipt">
                                                <p></p>
                                                <button type="submit" class="btn btn-submit" name="send_recepit_but"> ส่งสลิฟการโอนเงิน </button>
                                            </center>
                                            <!-- /. FORM GROUP-->
                                        </div>
                                    </form>
                                </div>

                                <!-- /. panel -->
                            </div>
                            <!-- /. col-md-12 -->
                        </div>
                        <!-- /. CENTER -->
                    </div>
                    <!-- /. ROW -->
                </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- SEND RECEIPT -->
    <?php
    if (isset($_POST['send_recepit_but'])) {
        $error = array();

        $recepit = $_FILES['receipt'];
        $phone_recepit = mysqli_real_escape_string($con, $_POST['phone']);

        /* ERROR CHECK */
        if ($_FILES['receipt']['error'] > 0) {
            array_push($error, "ERRPR");
            echo "<script type='text/javascript'> alert('กรุณาใส่รูปสลิฟการชำระเงิน')</script>";
        }
        if (empty($phone_recepit)) {
            array_push($error, "ERRPR");
            echo "<script type='text/javascript'> alert('กรุณาใส่เบอร์โทรศัพท์ที่จอง')</script>";
        }

        $user_check = "SELECT * FROM roombook WHERE Phone = '$phone_recepit'";
        $user_check_query = mysqli_query($con, $user_check);
        $resute = mysqli_fetch_assoc($user_check_query);

        if ($phone_recepit != $resute['Phone']) {
            array_push($error, "ERROR");
            echo "<script type='text/javascript'> alert('เบอร์โทรศัพท์ที่กรอกผิด หรือ ท่านไม่ได้จองไว้')</script>";
        }
        if ($resute['stat'] == "Conform") {
            array_push($error, "ERROR");
            echo "<script type='text/javascript'> alert('เบอร์นี้ได้รับการยืนยันห้องจากทางโรงแรมแล้ว')</script>";
        }

        $user_check_2 = "SELECT * FROM recepit WHERE Phone = '$phone_recepit' LIMIT 1";
        $user_check_query_2 = mysqli_query($con, $user_check_2);
        $resute_2 = mysqli_fetch_assoc($user_check_query_2);

        if ($resute_2['Phone'] === $phone_recepit) {
            array_push($error, "ERROR");
            echo "<script type='text/javascript'> alert('ท่านเคยส่งสลิฟการชำระเงินเข้ามาแล้ว ถ้าส่งผิดกรุณาติดต่อเจ้าหน้าที่') </script>";
        }

        if ($resute['Phone'] === $phone_recepit) {
           $user_insert = "SELECT * FROM roombook WHERE Phone = '$phone_recepit'";
           $user_insert_query = mysqli_query($con,$user_insert_query);
           $user_insert_resute = mysqli_fetch_assoc($user_insert);

           $user_insert_resute['Title'] = $title;
        }

        if (count($error) == 0) {
            /*
            echo "<script type='text/javascript'> alert(". $title .")</script>";
            echo "<script type='text/javascript'> alert(". $fname .")</script>";
            echo "<script type='text/javascript'> alert(". $lname .")</script>";
            echo "<script type='text/javascript'> alert(". $troom .")</script>";
            */

            
            $temp = explode(".", $_FILES["receipt"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES["receipt"]["tmp_name"], "file/" . $newfilename);

            $insert_receipt = "INSERT INTO recepit (Title, FName, LName, TRoom , Phone, recepit) VALUES ('$title','$fname','$lname','$troom','$phone_recepit','$newfilename')";
            mysqli_query($con, $insert_receipt);
            echo "<script type='text/javascript'> alert('ส่งสลิฟการจ่ายเงินเรียบร้อย')</script>";
        }
    }
    ?>

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>