<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION KAENKAO HOTEL</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a href="reservation.php" class="active-menu"><i class="fa fa-qrcode"></i> การจองห้องพัก</a>
                    </li>
                    <li>
                        <a href="send_receipt.php"> <i class="fa fa-qrcode"></i> ยืนยันการชำระเงิน </a>
                    </li>

                </ul>

            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            การจอง <small></small>
                        </h1>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                ข้อมูลจอง
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post">
                                    <div class="form-group">
                                        <label>คำนำหน้า</label>
                                        <select name="title" class="form-control" required>
                                            <option value selected></option>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> ชื่อ </label>
                                        <input name="fname" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>นามสกุล</label>
                                        <input name="lname" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>

                                    </div>
                                    <?php

                                    $countries = array(
                                        'กระบี่', 'กรุงเทพมหานคร', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร',
                                        'ขอนแก่น',
                                        'จันทบุรี',
                                        'ฉะเชิงเทรา',
                                        'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร', 'เชียงราย', 'เชียงใหม่',
                                        'ตรัง', 'ตราด', 'ตาก',
                                        'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา', 'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 'นราธิวาส', 'น่าน',
                                        'บึงกาฬ', 'บุรีรัมย์',
                                        'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี',
                                        'พระนครศรีอยุธยา', 'พะเยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 'เพชรบุรี', 'เพชรบูรณ์', 'แพร่',
                                        'ภูเก็ต',
                                        'มหาสารคาม', 'มุกดาหาร', 'แม่ฮ่องสอน',
                                        'ยโสธร', 'ยะลา',
                                        'ร้อยเอ็ด', 'ระนอง', 'ระยอง', 'ราชบุรี',
                                        'ลพบุรี', 'ลำปาง', 'ลำพูน', 'เลย',
                                        'ศรีสะเกษ',
                                        'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม', 'สมุทรสาคร', 'สระแก้ว', 'สระบุรี', 'สิงห์บุรี', 'สุโขทัย', 'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์',
                                        'หนองคาย', 'หนองบัวลำภู',
                                        'อ่างทอง', 'อำนาจเจริญ', 'อุดรธานี', 'อุตรดิตถ์', 'อุทัยธานี', 'อุบลราชธานี'
                                    );
                                    ?>
                                    <div class="form-group">
                                        <label>จังหวัด*</label>
                                        <select name="country" class="form-control" required>
                                            <option value selected></option>
                                            <?php
                                            foreach ($countries as $key => $value) :
                                                echo '<option value="' . $value . '">' . $value . '</option>'; //close your tags!!
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>เบอร์โทรศัพท์</label>
                                        <input name="phone" type="text" class="form-control" required>

                                    </div>

                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    ข้อมูลการจอง
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>ประเภทของห้อง *</label>
                                        <select name="troom" class="form-control" required>
                                            <option value selected></option>
                                            <option value="TWINS">TWINS ROOM</option>
                                            <option value="CONNECTION">Connection room</option>
                                            <option value="SWEET">Sweet room</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> เตียง </label>
                                        <select name="bed" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Single">Single</option>
                                            <option value="Double">Double</option>
                                            <option value="Triple">Triple</option>
                                            <option value="Quad">Quad</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>จำนวนห้อง *</label>
                                        <select name="nroom" class="form-control" required>
                                            <option value selected></option>
                                            <option value="1">1</option>
                                            <!--  <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>มื้ออาหาร</label>
                                        <select name="meal" class="form-control" required>
                                            <option value selected></option>
                                            <option value="ห้องอย่างเดียว">ห้องอย่างเดียว</option>
                                            <option value="อาหารเช้าอย่างเดียว">อาหารเช้าอย่างเดี่ยว</option>
                                            <option value="ครี่งวัน">ครึ่งวัน</option>
                                            <option value="ทั้งหมด">ทั้งหมด</option>



                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>เช็คอิน</label>
                                        <input name="cin" type="date" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label> เช็คเอาท์ </label>
                                        <input name="cout" type="date" class="form-control">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <?php
                                $rsql = "SELECT * FROM room";
                                $rre = mysqli_query($con, $rsql);
                                $r = 0;
                                $sc = 0;
                                $gh = 0;
                                $sr = 0;
                                $dr = 0;
                                while ($rrow = mysqli_fetch_array($rre)) {
                                    $r = $r + 1;
                                    $s = $rrow['type'];
                                    $p = $rrow['place'];
                                    if ($s == "TWINS") {
                                        $sc = $sc + 1;
                                    }

                                    if ($s == "CONNECTION") {
                                        $gh = $gh + 1;
                                    }
                                    if ($s == "SWEET") {
                                        $sr = $sr + 1;
                                    }
                                }
                                ?>

                                <?php
                                $csql = "SELECT * FROM payment";
                                $cre = mysqli_query($con, $csql);
                                $cr = 0;
                                $csc = 0;
                                $cgh = 0;
                                $csr = 0;
                                $cdr = 0;
                                while ($crow = mysqli_fetch_array($cre)) {
                                    $cr = $cr + 1;
                                    $cs = $crow['troom'];

                                    if ($cs == "TWINS") {
                                        $csc = $csc + 1;
                                    }

                                    if ($cs == "CONNECTION") {
                                        $cgh = $cgh + 1;
                                    }
                                    if ($cs == "SWEET") {
                                        $csr = $csr + 1;
                                    }
                                }

                                ?>
                                <div class="col-md-10 col-sm-10">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            ห้องที่เหลือว่างจำนวนกี่ห้อง
                                        </div>
                                        <div class="panel-body">
                                            <table>

                                                <tr>
                                                    <td><b>Twins room </b></td>
                                                    <td><button type="button" class="btn btn-primary btn-circle">
                                                            <?php
                                                            $f1 = $sc - $csc;
                                                            if ($f1 <= 0) {
                                                                $f1 = "NO";
                                                                echo $f1;
                                                            } else {
                                                                echo $f1;
                                                            }


                                                            ?> </button></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Connection room</b> </td>
                                                    <td><button type="button" class="btn btn-primary btn-circle">
                                                            <?php
                                                            $f2 =  $gh - $cgh;
                                                            if ($f2 <= 0) {
                                                                $f2 = "NO";
                                                                echo $f2;
                                                            } else {
                                                                echo $f2;
                                                            }

                                                            ?> </button></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sweet room </b></td>
                                                    <td><button type="button" class="btn btn-primary btn-circle">
                                                            <?php
                                                            $f3 = $sr - $csr;
                                                            if ($f3 <= 0) {
                                                                $f3 = "NO";
                                                                echo $f3;
                                                            } else {
                                                                echo $f3;
                                                            }

                                                            ?> </button></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total Rooms </b> </td>
                                                    <td> <button type="button" class="btn btn-danger btn-circle">
                                                            <?php

                                                            $f5 = $r - $cr;
                                                            if ($f5 <= 0) {
                                                                $f5 = "NO";
                                                                echo $f5;
                                                            } else {
                                                                echo $f5;
                                                            }
                                                            ?> </button></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">

                                        </div>
                                    </div>

                                    <!-- /.COL -->
                                </div>
                                <!-- /.ROW -->
                            </div>


                            <div class="col-md-12 col-sm-12">
                                <div class="well">
                                    <h4>HUMAN VERIFICATION</h4>
                                    <p>Type Below this code <?php $Random_code = rand();
                                                            echo $Random_code; ?> </p><br />
                                    <p>Enter the random code<br /></p>
                                    <input type="text" name="code1" title="random code" />
                                    <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                    <input type="submit" name="submit" class="btn btn-primary">
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $code1 = $_POST['code1'];
                                        $code = $_POST['code'];
                                        if ($code1 != "$code") {
                                            $msg = "Invalide code";
                                        } else {
                                            $con = mysqli_connect("localhost:3306","kaenkao","m^fhD899","kaenkao") or die(mysqli_connect_error());
                                            $check = "SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                            $rs = mysqli_query($con, $check);
                                            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                            if ($data[0] > 1) {
                                                echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                                            } else {
                                                $new = "Not Conform";
                                                $newUser = "INSERT INTO roombook(Title, FName, LName, Email, Country, Phone, TRoom, Bed, NRoom, Meal, cin, cout,stat,nodays) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                                if (mysqli_query($con, $newUser)) {
                                                    echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                                } else {
                                                    echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                                }
                                            }

                                            $msg = "Your code is correct";
                                        }
                                    }
                                    ?>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>



                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
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