<?php
require_once "./mvc/view/Blocks/Header.php";
require_once "./mvc/view/Blocks/Loading.php";
?>
<div class="wrap row">
<?php
    include_once "./mvc/view/Blocks/TabUser.php";
?>
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
                            <img class="booking-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
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
                            <img class="booking-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
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
                            <img class="booking-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
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
                            <img class="booking-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
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
require_once "./mvc/view/Blocks/Footer.php";
?>

<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/profile.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>
