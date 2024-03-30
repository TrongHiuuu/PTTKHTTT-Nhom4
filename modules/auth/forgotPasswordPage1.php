<?php
    session_start();
    $error = false;
    if (isset($_POST['confirm'])) {
        require "../../includes/connect.php";
        $email = /*mysqli_real_escape_string($conn, */$_POST['email'];
        $sql = "SELECT email FROM tbl_user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            header("location:forgotPasswordPage2.php"); 
            die();
        }
        else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài khoản mới - Vinabook</title>
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../templates/css/forgotPasswordPage1CSS.css">
    <link rel="icon" href="../../templates/img/vnbLogo.jpg">
</head>
    <body>
        <header class="header">
            <nav class="header-navbar">
                <!-- các elements trên navbar -->
                <ul class="header-navbar-list">
                    <li class="header-navbar-items">
                        <a href=""><img src="../../templates/img/vinabookLogo.png" alt="Vinabook-Logo"></a>
                    </li>
                    <li class="header-navbar-items">
                        <div class="header-navbar-items-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Tìm kiếm tựa sách, tác giả">
                            <button class="findBook-button">Tìm sách</button>
                        </div>
                    </li>
                    <li class="header-navbar-items">
                        <div class="header-navbar-items-Cart-SignIn-SignUp">
                            <div class="header-navbar-items-Cart">
                                <a class="cart" href="#">
                                    <div class="circle"></div>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                            <div class="header-navbar-items-SignIn-SignUp">
                                <a id="signin" href="login.php"><div class="header-navbar-items-SignIn">Đăng nhập</div></a>
                                <div class="header-navbar-items-separate"></div>
                                <a id="signup" href="register.php"><div class="header-navbar-items-SignUp">Đăng ký</div></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="container-form">
                <div class="container-form-row1">
                    <i class="fa-solid fa-circle-exclamation"></i>
                </div>
                <div class="container-form-row2">
                    <strong>Quên Mật Khẩu</strong>
                </div>
                <div class="container-form-row3">
                    <p>Vui lòng nhập vào địa chỉ email của bạn, chúng tôi sẽ gửi mã xác nhận nhằm giúp bạn khôi phục mật khẩu.</p>
                </div>
                <div class="container-form-row4">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="email" placeholder="Nhập vào email của bạn...">
                </div>
                <?php if($error === true):?>
                    <div class="container-form-row5">
                        <p>Chúng tôi không tìm thấy địa chỉ email này.</p>
                    </div>
                <?php endif ?>
                <div class="container-form-row6">
                    <input type="submit" name="confirm" id="confirm" value="Gửi Mã Xác Nhận">
                </div>
                <div class="container-form-row7">
                    <i>Trở về trang <a href="login.php"> đăng nhập</a></i>
                </div>
            </div>
        </div>
    </body>
    <footer class="footer">
        <div class="footer-row">
            <div class="footer-row1"></div>
        </div>
        <div class="footer-row">
            <div class="footer-row2">
                <div class="footer-row2-content">
                    <div class="footer-row2-content-items">
                        <div class="footer-row2-content-items-left1">
                            <img src="../../templates/img/bocongthuong.png" alt="">
                        </div>
                        <div class="footer-row2-content-items-left2">
                            WEBSITE CÙNG HỆ THỐNG
                        </div>
                        <div class="footer-row2-content-items-left3"> 
                            <img class="footer-row2-content-items-left3-img1" src="../../templates/img/hotdeal.png" alt="">
                            <img class="footer-row2-content-items-left3-img2" src="../../templates/img/yesgo.png" alt="">
                        </div>
                    </div>
                    <div class="footer-row2-content-items">
                        <div class="footer-row2-content-items-right1">
                            CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM
                        </div>
                        <div class="footer-row2-content-items-right2">
                            Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú, Hồ Chí Minh <br>
                            MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011 <br>
                            Tel: 028.73008182 - Fax: 028.39733234 - Email: <a style="text-decoration: none; color: #0066C0" href="">hotro@vinabook.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>