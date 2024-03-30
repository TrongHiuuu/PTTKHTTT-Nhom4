<?php
    include "includes/session.php";
    /*if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'login':
                header("location:modules/auth/login.php");
                break;
            case 'register':
                header("location:modules/auth/register.php");
                break;
            case 'logout':
                header("location:modules/auth/logout.php");
                break;
            default:
                break;
        }
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="templates/css/homePageCSS.css">
    <link rel="icon" href="templates/img/vnbLogo.jpg">
    <title>Vinabook.com</title>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
    <body>
        <div class="website">
            <div><?php var_dump($_SESSION); ?></div>
            <div>
                <?php if (!isset($_SESSION['user']['fullname'])):?>
                    <div><p><?php echo "Bạn chưa đăng nhập"?></p></div>
                <?php else:?>
                    <div><p><?php echo "Xin chào ".$_SESSION['user']['fullname']."!";?></p></div>
                <?php endif ?>
            </div>
            
            <!-- phần header có navbar -->
            <header class="header">
                <nav class="header-navbar">
                    <!-- các elements trên navbar -->
                    <ul class="header-navbar-list">
                        <li class="header-navbar-items">
                            <a href="index.php"><img src="templates/img/vinabookLogo.png" alt="Vinabook-Logo"></a>
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
                                    <?php if(!isset($_SESSION['user']['username'])): ?>
                                        <a id="signin" href="modules/auth/login.php"><div class="header-navbar-items-SignIn">Đăng nhập</div></a>
                                    <?php else: ?>
                                        <a id="logout" href="modules/auth/logout.php"><div class="header-navbar-items-SignIn">Đăng xuất</div></a>
                                    <?php endif ?>
                                    <div class="header-navbar-items-separate"></div>
                                    <a id="signup" href="modules/auth/register.php"><div class="header-navbar-items-SignUp">Đăng ký</div></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
            <section class="container">
                <section class="container-top">
                    <div class="container-top-book-catalogue">
                        <div class="container-top-book-catalogue-content">
                            <div class="container-top-book-catalogue-content-left">
                                <i class="fa-solid fa-bars-staggered"></i>
                                <p> Danh Mục Sách</p>
                            </div>
                            <div class="container-top-book-catalogue-content-right">
                                <i class="fa-solid fa-phone"></i>
                                <p>Hotline: 1900 704421</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-top-dropDownList-and-banner">
                        <div class="container-top-dropDownList-and-banner-left">
                            <ul class="container-top-dropDownList-and-banner-left-list">
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Bán Chạy
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Mới Phát Hành
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Sắp Phát Hành
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Ngoại Văn
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Kinh Tế
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Văn Học Trong Nước
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Văn Học Nước Ngoài
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Thường Thức - Đời sống
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Thiếu Nhi
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Phát Triển Bản Thân
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Tin Học - Ngoại Ngữ
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Tin Học - Ngoại Ngữ
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Sách Giáo Khoa - Giáo Trình
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        Tạp Chí - Văn Phòng Phẩm
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container-top-dropDownList-and-banner-right">
                            <div class="container-top-dropDownList-and-banner-right-slideshow">
                                <div class="container-top-dropDownList-and-banner-right-slideshow-listImage">
                                    <img class="nature"src="templates/img/banner1.jpg" alt="">
                                    <img class="nature" src="templates/img/banner2.jpg" alt="">
                                    <img class="nature" src="templates/img/banner3.jpg" alt="">
                                    <img class="nature" src="templates/img/banner4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container-bottom">
                    <div class="container-bottom-content">
                        <div class="container-bottom-content-left">
                            <div style="font-size: 19px; margin: 35px 0">
                                Sách Mới Hay
                            </div>
                            <div class="container-bottom-content-bigProductCard">
                                <div class="container-bottom-content-bigProductCardcontent">
                                    <img src="templates/img/book1.jpg" alt="">
                                </div>
                                <div class="container-bottom-content-bigProductCardcontent">
                                    <div class="container-bottom-content-bigProductCardcontent-text1">
                                        <b>Ngày Mai, Ngày Mai, Và Ngày Mai Nữa</b>
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text2">
                                        Gabrielle Zevin
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text3">
                                        “Hết sức tráng lệ. Bằng bút pháp tuyệt mỹ và sâu sắc, Gabrielle Zevin đã phác họa nên vẻ đẹp, sự bền bỉ và mong manh của tình yêu cùng sự sáng tạo của con người. Ngày mai, ngày mai, và ngày mai nữa là một trong những cuốn sách hay nhất tôi từng đọc.” <br>John Green
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text4">
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text5">
                                        <div class="container-bottom-content-bigProductCardcontent-text5-dt">
                                            <div class="container-bottom-content-bigProductCardcontent-text5-dt1">
                                                259.000đ
                                            </div>
                                            <div class="container-bottom-content-bigProductCardcontent-text5-dt2">
                                                207.000đ
                                            </div>
                                        </div>
                                        <div class="container-bottom-content-bigProductCardcontent-text5-dt">
                                            <button>Mua Ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 19px; margin: 35px 0">
                                Sách Bán Chạy
                            </div>
                            <div class="container-bottom-content-productList">
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 19px; margin: 35px 0">
                                Sách Mới Hay
                            </div>
                            <div class="container-bottom-content-bigProductCard">
                                <div class="container-bottom-content-bigProductCardcontent">
                                    <img src="templates/img/book1.jpg" alt="">
                                </div>
                                <div class="container-bottom-content-bigProductCardcontent">
                                    <div class="container-bottom-content-bigProductCardcontent-text1">
                                        <b>Ngày Mai, Ngày Mai, Và Ngày Mai Nữa</b>
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text2">
                                        Gabrielle Zevin
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text3">
                                        “Hết sức tráng lệ. Bằng bút pháp tuyệt mỹ và sâu sắc, Gabrielle Zevin đã phác họa nên vẻ đẹp, sự bền bỉ và mong manh của tình yêu cùng sự sáng tạo của con người. Ngày mai, ngày mai, và ngày mai nữa là một trong những cuốn sách hay nhất tôi từng đọc.” <br>John Green
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text4">
                                    </div>
                                    <div class="container-bottom-content-bigProductCardcontent-text5">
                                        <div class="container-bottom-content-bigProductCardcontent-text5-dt">
                                            <div class="container-bottom-content-bigProductCardcontent-text5-dt1">
                                                259.000đ
                                            </div>
                                            <div class="container-bottom-content-bigProductCardcontent-text5-dt2">
                                                207.000đ
                                            </div>
                                        </div>
                                        <div class="container-bottom-content-bigProductCardcontent-text5-dt">
                                            <button>Mua Ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 19px; margin: 35px 0">
                                Sách Mới Hay
                            </div>
                            <div class="container-bottom-content-productList">
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-bottom-content-productCard">
                                    <div class="container-bottom-content-productCardcontent">
                                        <img src="templates/img/book3.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-productCardcontent">
                                        <div class="container-bottom-content-productCardcontent-text1">
                                            <b>Thương</b>
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text2">
                                            Nhiều tác giả
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text4">
                                            Em nói em từ bỏ Sao em lại đau lòng? Em nói em từ bỏ Sao em còn trông mong?"
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text3">
                                        </div>
                                        <div class="container-bottom-content-productCardcontent-text5">
                                            <div class="container-bottom-content-productCardcontent-text5-dt1">
                                                75.000đ
                                            </div>
                                            <div class="container-bottom-content-productCardcontent-text5-dt2">
                                                <b>64.000đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-bottom-content-right">
                            <div style="font-size: 19px; margin: 35px 0 35px 0">
                                Sách Bán Chạy Trong Tuần
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 19px; margin: 35px 0 35px 0">
                                Sách Bán Chạy Trong Tháng
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-bottom-content-right-productList">
                                <div class="container-bottom-content-right-productList-productCard">
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <img src="templates/img/book4.jpg" alt="">
                                    </div>
                                    <div class="container-bottom-content-right-productList-productCardcontent">
                                        <div class="container-bottom-content-right-productList-productCardcontent-text1">
                                            Lucky Luke 54 - Con Lạc Đà
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-text2">
                                            Morris & Goscinny
                                        </div>
                                        <div class="container-bottom-content-right-productList-productCardcontent-price">
                                            <div class="container-bottom-content-right-productList-productCardcontent-price1">
                                                26.700đ
                                            </div>
                                            <div class="container-bottom-content-right-productList-productCardcontent-price2">
                                                <b>21.500đ</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
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
                            <img src="templates/img/bocongthuong.png" alt="">
                        </div>
                        <div class="footer-row2-content-items-left2">
                            WEBSITE CÙNG HỆ THỐNG
                        </div>
                        <div class="footer-row2-content-items-left3"> 
                            <img class="footer-row2-content-items-left3-img1" src="templates/img/hotdeal.png" alt="">
                            <img class="footer-row2-content-items-left3-img2" src="templates/img/yesgo.png" alt="">
                        </div>
                    </div>
                    <div class="footer-row2-content-items">
                        <div class="footer-row2-content-items-right1">
                            CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM
                        </div>
                        <div class="footer-row2-content-items-right2">
                            Địa chỉ: Tiểu Vương Quốc Bình Chánh <br>
                            MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011 <br>
                            Tel: 028.73008182 - Fax: 028.39733234 - Email: <a style="text-decoration: none; color: #0066C0" href="">hotro@vinabook.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        w3.slideshow(".nature", 1000);
    </script>
</html>