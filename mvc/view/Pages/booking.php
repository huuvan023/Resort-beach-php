<!DOCTYPE html>
<html>
    <head>
        <title>
            Trang chủ
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href="./../slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="./../slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="../Css/user.css">
        <link rel="stylesheet" type="text/css" href="../Css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../Css/Header.css">
        <link rel="stylesheet" type="text/css" href="../Css/Master.css">
    </head>
    <body onload="loadFunction()">
         <?php
         require_once "../Blocks/Loading.php";
         require_once "../Blocks/Header.php";
         ?>

        <div class="wrap row">
            
            <section style="z-index: 1;" class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p-0">
                <ul class="profileTab">
                    <li>
                        <a href="/WebProject-2020-master/mvc/view/Pages/profile.php" class="tabActive" href="#"><i class="fas fa-user-alt"></i>Hồ sơ</a>
                    </li>
                    <li>
                        <a href="/WebProject-2020-master/mvc/view/Pages/booking.php"><i class="far fa-check-square"></i>Đặt phòng</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                    </li>
                </ul>
            </section>
            
            <section style="z-index: 0;" class="col-xs-12 col-sm-8 col-md-9 col-lg-9 p-0">
                    <div class="wrap-content-profile">
                        <h2>Thông tin phòng đã đặt</h2>
                        <div id="booking-alert">
                            <p>Bạn chưa đặt phòng nào ! Bạn có thể click <a href="/WebProject-2020-master/mvc/view/Pages/totalroom.php"> vào đây </a>
                             để xem thêm phòng<span onclick="closeRoomAlert()">x</span></p>
                        </div>
                        <div class="booking-con-wrap">
                            <div class="booking-container">
                                <!--If empty add class "empty"*/-->
                                <div class="roomEmpty">
                                    <i class="far fa-sticky-note"></i>
                                    <p>Tất cả phòng đặt (0) </p>
                                </div>
                                <div class="booking-room-detail">
                                    <div class="booking-room-card">
                                        <img class="booking-img" src="../../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                                        <div class="booking-room-card-content">
                                            <h3><span>Phòng đơn</span>Triple Basic</h3>
                                            <div class="room-card-option">
                                                <i class="fas fa-users"></i>
                                                Số người: <span>10</span>
                                            </div>
                                            <div class="room-card-discription">
                                                <p>
                                                Street art edison bulb gluten-free, tofu try-hard lumbersexual brooklyn tattooed pickled chambray. Actually humblebrag next level, deep v art party wolf tofu direct trade readymade sustainable hell of banjo. Organic authentic subway tile cliche palo santo
                                                </p>
                                            </div>
                                        </div>
                                        <div class="booking-room-card-price">
                                            <div class="booking-card-rate">
                                                <p>Điểm đánh giá:</p> <span>6.3</span>
                                            </div>
                                            <div class="booking-card-price">
                                                <p id="bk-title">Giá: </p>
                                                <p>$.500</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="booking-room-card">
                                        <img class="booking-img" src="../../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                                        <div class="booking-room-card-content">
                                            <h3><span>Phòng đơn</span>Triple Basic</h3>
                                            <div class="room-card-option">
                                                <i class="fas fa-users"></i>
                                                Số người: <span>10</span>
                                            </div>
                                            <div class="room-card-discription">
                                                <p>
                                                Street art edison bulb gluten-free, tofu try-hard lumbersexual brooklyn tattooed pickled chambray. Actually humblebrag next level, deep v art party wolf tofu direct trade readymade sustainable hell of banjo. Organic authentic subway tile cliche palo santo
                                                </p>
                                            </div>
                                        </div>
                                        <div class="booking-room-card-price">
                                            <div class="booking-card-rate">
                                                <p>Điểm đánh giá:</p> <span>6.3</span>
                                            </div>
                                            <div class="booking-card-price">
                                                <p id="bk-title">Giá: </p>
                                                <p>$.500</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="booking-room-card">
                                        <img class="booking-img" src="../../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                                        <div class="booking-room-card-content">
                                            <h3><span>Phòng đơn</span>Triple Basic</h3>
                                            <div class="room-card-option">
                                                <i class="fas fa-users"></i>
                                                Số người: <span>10</span>
                                            </div>
                                            <div class="room-card-discription">
                                                <p>
                                                Street art edison bulb gluten-free, tofu try-hard lumbersexual brooklyn tattooed pickled chambray. Actually humblebrag next level, deep v art party wolf tofu direct trade readymade sustainable hell of banjo. Organic authentic subway tile cliche palo santo
                                                </p>
                                            </div>
                                        </div>
                                        <div class="booking-room-card-price">
                                            <div class="booking-card-rate">
                                                <p>Điểm đánh giá:</p> <span>6.3</span>
                                            </div>
                                            <div class="booking-card-price">
                                                <p id="bk-title">Giá: </p>
                                                <p>$.500</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="booking-room-card">
                                        <img class="booking-img" src="../../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                                        <div class="booking-room-card-content">
                                            <h3><span>Phòng đơn</span>Triple Basic</h3>
                                            <div class="room-card-option">
                                                <i class="fas fa-users"></i>
                                                Số người: <span>10</span>
                                            </div>
                                            <div class="room-card-discription">
                                                <p>
                                                Street art edison bulb gluten-free, tofu try-hard lumbersexual brooklyn tattooed pickled chambray. Actually humblebrag next level, deep v art party wolf tofu direct trade readymade sustainable hell of banjo. Organic authentic subway tile cliche palo santo
                                                </p>
                                            </div>
                                        </div>
                                        <div class="booking-room-card-price">
                                            <div class="booking-card-rate">
                                                <p>Điểm đánh giá:</p> <span>6.3</span>
                                            </div>
                                            <div class="booking-card-price">
                                                <p id="bk-title">Giá: </p>
                                                <p>$.500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-cash">
                                <h3>Tổng thanh toán: </h3> <span>$.2000</span>
                                <button>Thanh toán</button>
                            </div>
                        </div>
                    </div>
            </section>
            
        </div>
        <?php
            require_once "../Blocks/Footer.php";
        ?>
        <script type="text/javascript" src="./../Js/user.js"></script>
    </body>
</html>
