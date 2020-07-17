<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./vendor/css/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-page">
        <div class="topnav-mobile-overlay" id="topnav-mobile-overlay"></div>
        <div class="topnav-mobile" id="topnav-mobile">
            <div class="wrap-avatar ">
                <div class="container">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center">
                            <img src="category/avata.jpg" alt="" class="avata">
                        </div>
                        <div class="col-7 header__text">
                            <p> Tam Tạ</p>
                            <p>facebook.com.vn</p>

                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <i class="fa fa-angle-right header__angle " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav__content">
                <div class="container">
                    <div class="row ">
                        <div class="col-12">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-list-ul" aria-hidden="true"></i>Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>Quản lý tài khoản</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-bell" aria-hidden="true"></i>Thông báo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>Khuyến mãi hot</span>
                            <ul>
                                <li><a href="">VTC Deal</a></li>
                                <li>
                                    <a href=""></a>Phiếu quà tặng</li>
                                <li>
                                    <a href=""></a>Ưu đãi cho chủ thẻ ngân hàng</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>Hỗ trợ</span>
                            <ul>
                                <li class=" hotline "><a href="">Hotline: <strong>1800 - 6963</strong> (miễn phí)</a></li>
                                <li>
                                    <a href=""> </a>Hỗ trợ khách hàng </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <header class="header">
            <div class="container wrap-header-top">
                <div class="row d-flex justify-content-end">

                    <ul class="header-top d-flex">
                        <li><a href="">Ngô ngữ : Tiếng Việt </a></li>
                        <li><a href="">Trợ giúp</a></li>
                        <li><a> <?php

                                session_start();
                                if (isset($_SESSION["users"])) {
                                    echo $_SESSION["users"];
                                } else {
                                    echo '<li><a href="login_form.php">Đăng nhập</a></li>';
                                }
                                ?></a></li>
                        <?php
                        if (isset($_SESSION["users"])) {
                            echo '<li><a href="logout.php">Đăng xuất</a></li>';
                        } else {
                            echo '  <li><a href="register_form.php">Đăng ký</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-2 d-lg-none ">
                        <i class="fa fa-bars header__bars" id="bars-js" aria-hidden="true"></i>
                    </div>
                    <div class="col-8 col-lg-2 order-lg-1 text-center text-lg-left">
                        <a href="" class="header__logo">
                            <img src="category/vtcalogo.png" alt="">
                        </a>
                    </div>
                    <div class="col-2 col-lg-1 order-lg-3 text-lg-right">
                        <i class="fa fa-shopping-cart header__cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 col-lg-9 order-lg-2">
                        <div class="header__wrap--search">
                            <input type="text" placeholder="Ban tim gi hom nay" class="header__input-search" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row header-toolbar d-flex">

                    <div class="col-md-3 listofproducts">
                        <ul>
                            <li>
                                <a href=""> <i class="fa fa-bars" aria-hidden="true"></i>Danh sách sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row d-flex  justify-content-end">
                        <ul class=" header-toolbarright d-flex">
                            <li>
                                <a href=""> <i class="fa fa-map-marker" aria-hidden="true"></i>Bạn muốn giao tới đâu</a>
                            </li>
                            <li><a href="">Sản phẩm bạn đã xem</a></li>
                            <li><a href="">Sản phẩm phổ biến</a></li>
                            <li><a href="">Sản phẩm khuyến mãi</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </header>
        <div class="main">
            <div class="container mt-1 main__mobile">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleControls-mobile" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./category/banner.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./category/banner1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./category/banner2.png" class="d-block w-100" alt="...">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3 main__mobile">
                <div class="row">
                    <div class="col-12">
                        <div class="nav-mobile d-flex">
                            <div class="col-3">
                                <a href=""><img src="./category/Group 1.png" alt="">
                                    <p>Danh muc</p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href=""><img src="./category/Image 4.png" alt="">
                                    <p>VTC Deal</p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href=""><img src="./category/Group 120.png" alt="">
                                    <p>Gỉa trí</p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href=""><img src="./category/Group 118.png" alt="">
                                    <p>VTC now</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main__mobile">
                <div class="row">
                    <div class="col-12">
                        <span class="text">Danh mục sản phẩm
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="nav-mobile ">
                            <div class="scroll d-flex">

                                <div class="col-3 ">
                                    <a href=""><img src="category/Image -5.png" alt="" class="img__mobile">
                                        <p>Đồ chơi mẹ & bé</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -6.png" alt="" class="img__mobile">
                                        <p>Điện Thoai-Máy Tính Bảng
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -7.png" alt="" class="img__mobile">
                                        <p>Làm Đẹp-Sức Khỏe
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -8.png" alt="" class="img__mobile">
                                        <p>Điện Gia Dụng
                                        </p>
                                    </a>
                                </div>

                                <div class="col-3">
                                    <a href=""><img src="category/Image -9.png" alt="" class="img__mobile">
                                        <p>Thời Trang
                                        </p>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="nav-mobile ">
                            <div class="scroll d-flex">
                                <div class="col-3">
                                    <a href=""><img src="category/Image -10.png" alt="" class="img__mobile">
                                        <p>Laptop-Máy Vi Tinh-Linh Kiện</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -11.png" alt="" class="img__mobile">
                                        <p>Nhà Của-Đời Sống
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -12.png" alt="" class="img__mobile">
                                        <p>Hàng Quốc Tế
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -13.png" alt="" class="img__mobile">
                                        <p>Thiết Bí Số-Phụ Kiện Số
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/Image -14.png" alt="" class="img__mobile">
                                        <p>Voucher-Dịch Vụ
                                        </p>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="container main__mobile"> -->
                <div class="row">
                    <div class="col-12">
                        <p class="text">Sản phẩm bạn quan tâm</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="nav-mobile">
                            <div class="scroll d-flex">
                                <div class="col-3">
                                    <a href=""><img src="category/product.jpg" alt="" class="img__mobile">
                                        <p>101.000₫</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product1.jpg" alt="" class="img__mobile">
                                        <p>5.100.000₫ </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product2.jpg" alt="" class="img__mobile">
                                        <p>195.000₫</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product2.jpg" alt="" class="img__mobile">
                                        <p>195.000₫</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product4.png" alt="" class="img__mobile">
                                        <p>30.000.000₫ </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product5.png" alt="" class="img__mobile">
                                        <p>50.000₫</p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product6.png" alt="" class="img__mobile">
                                        <p>150.000₫
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product7.png" alt="" class="img__mobile">
                                        <p>8.000.000₫
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product8.png" alt="" class="img__mobile">
                                        <p>10.000.000₫
                                        </p>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href=""><img src="category/product9.png" alt="" class="img__mobile">
                                        <p>10.000.000₫
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main__menu-product">
                <div class="row">
                    <div class="col-3 menu">
                        <a class="dropdown-item" href=""><i class="fa fa-mobile" aria-hidden="true"></i>Điện thoại -Máy tính bảng</a>
                        <a class="dropdown-item" href=""><i class="fa fa-television" aria-hidden="true"></i>Điện tử - Điện lạnh</a>
                        <a class="dropdown-item" href=""><i class="fa fa-headphones" aria-hidden="true"></i>Phụ kiện - Thiết bị số</a>
                        <a class="dropdown-item" href=""><i class="fa fa-laptop" aria-hidden="true"></i>Laptop - Thiết bị IT</a>
                        <a class="dropdown-item" href=""><i class="fa fa-camera" aria-hidden="true"></i>Máy ảnh - Quay phim</a>
                        <a class="dropdown-item" href=""><i class="fa fa-gamepad" aria-hidden="true"></i> Điện gia dụng</a>
                        <a class="dropdown-item" href=""><i class="fa fa-cutlery" aria-hidden="true"></i>Nhà cửa đời sống</a>
                        <a class="dropdown-item" href=""><i class="fa fa-birthday-cake" aria-hidden="true"></i>Hàng tiêu dung - Thực phẩm</a>
                        <a class="dropdown-item" href=""><i class="fa fa-puzzle-piece" aria-hidden="true"></i>Đồ chơi Mẹ & Bé</a>
                        <a class="dropdown-item" href=""><i class="fa fa-diamond" aria-hidden="true"></i>Thời trang - Phụ kiện</a>
                        <a class="dropdown-item" href=""><i class="fa fa-futbol-o" aria-hidden="true"></i>Thể thao - Dã ngoại</a>
                        <a class="dropdown-item" href=""><i class="fa fa-gift" aria-hidden="true"></i> Làm Đẹp - Sức Khỏe</a>
                        <a class="dropdown-item" href=""><i class="fa fa-car" aria-hidden="true"></i>Xe máy - Ô tô - Xe đạp</a>
                    </div>
                    <div class="col-9 banner-web">
                        <div class="row">
                            <div class="col-9">
                                <div class="container mt-1 main__web">
                                    <div id="carouselExampleControls-web" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="imgweb/banner2.jpg" class="d-block w-100 banner-image-web" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="imgweb/banner1.jpg" class="d-block w-100 banner-image-web" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="imgweb/banner3.jpg" class="d-block w-100 banner-image-web" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sale-items-right ">
                                <div><img src="imgweb/items_right.jpg" alt=""></div>
                                <div><img src="imgweb/items_right1.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="row sale-items ">
                            <div class=" sale-items d-flex">
                                <div><img src="imgweb/items3.jpg" width="280px" alt=""></div>
                                <div><img src="imgweb/items4.jpg" width="280px" alt=""></div>
                                <div><img src="imgweb/items5.jpg" width="280px" alt=""></div>
                            </div>
                            <div class=" sale-items d-flex">
                                <div><img src="imgweb/items9.jpg" width="280px" alt=""></div>
                                <div><img src="imgweb/items10.jpg" width="280px" alt=""></div>
                                <div><img src="imgweb/items11.jpg" width="280px" alt=""></div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row ">
                    <div class="sale-items d-flex">
                        <div class="items_bottom"><img src="imgweb/item7s.jpg" width="275px" alt=""></div>
                        <div class="items_bottom"><img src="imgweb/items15.jpg" width="275px" alt=""></div>
                        <div class="items_bottom"><img src="imgweb/items16.jpg" width="275px" alt=""></div>
                        <div class="items_bottom"><img src="imgweb/item6s.jpg" width="275px" alt=""></div>
                    </div>
                </div>
                <div class="row product_item_web">
                    <div class="col-12 watchedt ">
                        <div class="text__content-web">
                            <span>
                                Sản phẩm nổi bật
                            </span>
                        </div>

                        <div class="products__web">
                            <?php
                            require('mysqli_connect.php');
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT product_name, product_image, product_description, product_price FROM products";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-3 ">
                                <a href="" class="items_web">
                                    <div><img src="images/' . $row["product_image"] . '" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        ' . $row[" product_name"] . '
                                    </p>
                                    </p>
                                    <p class="title"> ' . $row["product_description"] . '
                                    </p>
                                    <p class="price"> ' . $row["product_price"] . '
                                    </p>
                                </a>
                            </div>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();


                            ?>
                            <!-- <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product3.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Điện thoại Nokia 6.1 Plus - Hàng Chính Hãng
                                    </p>
                                    <p class="price"> 5.490.000 ₫
                                        <span class="percent ">-17%%</span>
                                        <span class="original ">6.590.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product1.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Harry Potter Part 2: Harry Potter And The Chamber Of Secrets (Hardback) Hufflepuff Edition (Harry Potter và Phòng chứa bí mật) (English Book)
                                    </p>
                                    <p class="price"> 331.500 ₫
                                        <span class="percent ">-34%</span>
                                        <span class="original ">495.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product2.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Dây tắm cọ, chà lưng 2 mặt bằng silicon đa năng ( màu ngẩu nhiên)
                                    </p>
                                    <p class="price"> 48.000 ₫
                                        <span class="percent ">-70%</span>
                                        <span class="original ">160.000 ₫</span>
                                    </p>
                                </a>
                            </div> -->
                        </div>
                        <div class="center">
                            <a class="see-more">Xem thêm</a>
                        </div>

                    </div>

                </div>
                <div class="row product_item_web">
                    <div class="vtc_dael">
                        <div class="text__content-web">
                            <span>
                                VTC deal
                            </span>
                        </div>
                        <div class=" products__web  ">
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product4.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Áo khoác kaki jean Nam UNISEX Màu đen
                                    </p>
                                    <p class="price"> 105.000 ₫
                                        <span class="percent deal ">-48%</span>
                                        <span class="original ">199.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product6.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Thanh treo khăn rửa mặt, treo đồ đa năng. Chất liệu ABS Y tế, Keo gián Siêu khỏe Duflex, Sixe 460x42mm
                                    </p>
                                    <p class="price"> 36.000 ₫
                                        <span class="percent deal ">-35%</span>
                                        <span class="original ">55.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product8.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Tủ giày thông minh chống nước Juno Sofa 100*120*31 cm
                                    </p>
                                    <p class="price">1.440.000 ₫
                                        <span class="percent deal">-43%</span>
                                        <span class="original ">2.500.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product7.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;">
                                        Kệ để lò vi sóng,giá để lò vi sóng, kệ lò vi sóng đa năng,kệ bếp đa năng,kệ để nồi cơm điện 198
                                    </p>
                                    <p class="price"> 1.180.000 ₫
                                        <span class="percent deal">-37%</span>
                                        <span class="original ">1.850.000 ₫</span>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="center">
                            <a class="see-more">Xem thêm</a>
                        </div>

                    </div>
                </div>
                <div class="row product_item_web">
                    <div class=" care">
                        <div class="text__content-web">
                            <span>
                                Ngành hàng quan tâm
                            </span>
                        </div>

                        <div class=" products__web  ">
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product14.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;text-align: center;">
                                        Harry Potter Box
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product11.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;text-align: center;">
                                        Điện thoại Smartphone
                                    </p>

                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product20.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;text-align: center;">
                                        Đồ chơi
                                    </p>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="items_web">
                                    <div><img src="imgweb/product13.jpg" width="240px " alt=""></div>
                                    <p class="title" style="height: 40px;text-align: center;">
                                        Chiếu ngủ văn phòng
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <div class="container footer ">
                <div class="row footer_text">
                    <div class="col-12 text_footer">
                        <li><a href=""> Ưu đãi khi sử dụng tiki app</a></li>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <ul class="d-flex align-items-center">
                            <li><i class="fa fa-thumbs-up " aria-hidden="true"></i><span>Mua sắm và thành toán</span></li>

                            <li><i class="fa fa-star" aria-hidden="true"></i><span>Nhận Ưu đãi hơn tên app</span></li>

                            <li><i class="fa fa-train" aria-hidden="true"></i><span>Theo dõi đơn hàng</span></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container footer__web d-flex">
                <div class="col-3  ">
                    <div class=" customer_care "></div>
                    <span class="contents">Chăm sóc khách hàng</span>
                    <ul>
                        <li>
                            <a href="">Trung tâm trợ giúp</a>
                        </li>
                        <li>
                            <a href="">Hướng dẫn mua hàng</a>
                        </li>
                        <li>
                            <a href="">Thanh toán</a>
                        </li>
                        <li>
                            <a href="">Vận chuyển</a>
                        </li>
                        <li>
                            <a href="">Trả hàng & hoàn tiền</a>
                        </li>
                        <li>
                            <a href="">Chăm sóc khách hàng</a>
                        </li>
                        <li>
                            <a href="">Chính sách bảo hành</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 toward-the-company ">
                    <span class="contents">Về VTC Academy</span>
                    <ul>
                        <li>
                            <a href="">Giới thiệu về VTC Academy</a>
                        </li>
                        <li>
                            <a href="">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="">Điều khoản</a>
                        </li>
                        <li>
                            <a href="">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="">Chính hãng</a>
                        </li>
                        <li>
                            <a href="">Kênh người bán</a>
                        </li>

                    </ul>

                </div>
                <div class="col-3 payment_methods ">
                    <span class="contents">Phương thức thanh toán</span>
                    <div class="col-8">
                        <a href="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg" width="54" alt="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg" width="54" alt="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg" width="54" alt="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg" width="54" alt="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg" width="54" alt="">
                            <img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg" width="54" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3 connect-with-us">
                    <span class="contents">Kết nối với chúng tôi</span>
                    <ul class="icon d-flex">
                        <li>
                            <a href=""><i class="fa fa-facebook-official " aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <div>
                        <a>Tải ứng dụng trên</a>
                        <div><img class="download" src="imgweb/Image 25.png" width="146px" alt="" srcset=""></div>
                        <div>
                            <img class="download" src="imgweb/Image 26.png" width="146px" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/asm.js"></script>

</html>