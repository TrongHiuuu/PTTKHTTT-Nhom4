<?php
    $errors = [ 'email' => ['required' => '', 'invalid' => '', 'existed' => ''], 
                'password' => ['required' => ''],
                'r_password' => ['required' => '', 'unmatched' => ''], 
                'fullname' => ['required' => '']
            ];
    if(isset($_POST['register'])) {
        include "../../includes/functions.php";

        $errors['email']['required'] =  check_required($_POST['email']);
        $errors['email']['invalid'] = check_email_is_valid($_POST['email']);
        $errors['email']['existed'] = check_email_is_existed($_POST['email']);

        $errors['password']['required'] =  check_required($_POST['password']);
        $errors['r_password']['required'] =  check_required($_POST['r_password']);
        $errors['r_password']['unmatched'] = check_password_is_correct($_POST['password'], $_POST['r_password']);

        $errors['fullname']['required'] = check_required($_POST['fullname']);

        if (empty($errors)) {
            require "../../includes/connect.php";

            $email = $_POST['email'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO tbl_user (email, password, fullname, phone) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            
            if($prepareStmt) {  
                mysqli_stmt_bind_param($stmt, "ssss", $email, $password_hash, $fullname, $phone);
                mysqli_stmt_execute($stmt);
                echo "<script>Đăng kí thành công</script>";
                header("location:../../index.php");
            }
            else {
                echo "<script>Đã có lỗi xảy ra, vui lòng thử lại sau</script>";
            }
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../templates/css/signUpCSS.css">
    <link rel="icon" href="../../templates/img/vnbLogo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
    <body>
        <header class="header">
            <nav class="header-navbar">
                <!-- các elements trên navbar -->
                <ul class="header-navbar-list">
                    <li class="header-navbar-items">
                        <a href="../../index.php"><img src="../../templates/img/vinabookLogo.png" alt="Vinabook-Logo"></a>
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
            <ul class="container-row">
                <div class="container-row1">
                    <li class="container-row1-items">
                        Trang chủ
                    </li>
                    <li class="container-row1-items">
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="container-row1-items">
                        Tạo tài khoản mới
                    </li>
                </div>
            </ul>
            <ul class="container-row">
                <div class="container-row2">
                    <li class="container-row1-items">
                        <h2>Chưa có tài khoản? Đăng ký ngay</h2>
                        <div class="container-row1-items-hr"></div>
                    </li>
                </div>
            </ul>
            <ul class="container-row">
                <div class="signIn-box">
                    <div class="signIn-box-row1">
                        ĐĂNG KÝ TÀI KHOẢN
                    </div>
                    <div class="signIn-box-row3">
                        <div class="signIn-box-row3-form">
                            <form action="register.php" method="POST">
                                <div class="signIn-box-row3-form-items">
                                    <strong>Họ và tên<span style="color: #D64830">*</span></strong><input type="text" name="fullname" id="">
                                    <?php if(!empty($errors['fullname']['required'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['fullname']['required']?></p></div>
                                    <?php endif ?>
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Email<span style="color: #D64830">*</span></strong><input type="email" name="email" id="">
                                    <?php if (!empty($errors['email']['required'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['email']['required'] ?></p></div>
                                    <?php elseif (!empty($errors['email']['invalid'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['email']['invalid'] ?></p></div>
                                    <?php elseif (!empty($errors['email']['existed'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['email']['existed'] ?></p></div>
                                    <?php endif ?>
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Mật khẩu<span style="color: #D64830">*</span></strong><input type="password" name="password" id="">
                                    <?php if(!empty($errors['password']['required'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['password']['required'] ?></p></div>
                                    <?php endif ?>
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Xác nhận mật khẩu<span style="color: #D64830">*</span></strong><input type="password" name="r_password" id="">
                                    <?php if (!empty($errors['r_password']['required'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['r_password']['required'] ?></p></div>
                                    <?php elseif (!empty($errors['r_password']['unmatched'])): ?>
                                        <div class="alert"><p style="color: red;"><?php echo $errors['r_password']['unmatched'] ?></p></div>
                                    <?php endif ?>
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Điện thoại</strong><input type="text" name="phone" id="">
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Địa chỉ</strong><input type="text" name="address" id="">
                                </div>
                                <div class="signIn-box-row3-right-button"> 
                                    <button type="submit" name="register">Đăng kí</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="signIn-box-row5">
                        Đã có tài khoản? <a style="text-decoration: none; color: #0066C0" href="login.php">Đăng nhập ngay</a>
                    </div>
                </div>
            </ul>
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
