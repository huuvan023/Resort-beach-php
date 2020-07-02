<?php
    require_once "./mvc/view/Blocks/Loading.php";
    require_once "./mvc/view/Blocks/Header.php";
?>

<div class="wrap">

    <section id="navnavnav" class="wrap-banner row">
        <div class="overlay">
            <h1 class="overlay-header">
                Ocean View Suite 
            </h1>
            <div class="line"></div>
            <div class="overlay-button">
                <a href="<?php echo ( $data["Dashboard"] );?>">Trang chủ</a>
            </div>
        </div>
    </section>
    
    <section data-aos="fade-down"  class="room-detail-gallery row">
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
            <img src="../../public/gallery/s-13-the-anam-the-indochine-restaurant-vii-cr-800x450.jpg" alt="a">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
            <img src="../../public/gallery/s-15-the-anam-beach-ocean-cr-800x450.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
            <img src="../../public/gallery/khu-nghi-duong-the-anam-nha-trang-128-800x450.jpg" alt="b">
        </div>

    </section>

    <section  class="room-detail-info row">

        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <h2>Mô tả</h2>
                <p>Street art edison bulb gluten-free, tofu try-hard lumbersexual brooklyn tattooed pickled chambray. Actually humblebrag next level, deep v art party wolf tofu direct trade readymade sustainable hell of banjo. Organic authentic subway tile cliche palo santo, street art XOXO dreamcatcher retro sriracha portland air plant kitsch stumptown. Austin small batch squid gastropub. Pabst pug tumblr gochujang offal retro cloud bread bushwick semiotics before they sold out sartorial literally mlkshk. Vaporware hashtag vice, sartorial before they sold out pok pok health goth trust fund cray.</p>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <h2>Thông tin</h2>
                <h4>Giá: <span>$500</span></h4>
                <h4>Loại phòng: <span>Phòng đơn</span></h4>
                <h4>Số người tối đa: <span>20</span></h4>
                <h4>Đánh giá: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h4>
                <h4>Cho phép mang thú cưng</h4>
        </div>
        <div class="rent-now">
            <button id="bookingChoose">Đặt phòng ngay!</button>
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                    <h2>Đặt Phòng</h2><span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="checkDate">
                            <div style="margin-bottom: 7%;" class="dateCheckGr">
                                <label>Ngày thuê phòng</label>
                                <input type="date" name="datecome"/>
                            </div>
                            <div class="dateCheckGr">
                                <label>Ngày trả phòng</label>
                                <input type="date" name="datecome"/>
                            </div>
                        </div>
                        <div class="checkDatebtn">
                            <button>Kiểm tra</button>
                        </div>
                        <p id="success">Phòng vẫn còn trống !</p>
                        <p id="fail">Phòng đã có người đặt !</p>
                    </div>
                    <div class="modal-footer">
                        <button>Xác nhận</button>
                    </div>
                </div>

                </div>
        </div>
    </section>

    <section    class="room-other">
        <h1>Phòng cùng loại</h1>
        <div class="line"></div>
        <div class="slick">
            <div class="slick-card">
                <div class="sl-body">
                    <img src="<?php echo $data["Dashboard"] ?>/public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    <div class="sl-content">
                        <h2>Ocean View Suite</h2>
                        <p class="r-type">Loại phòng: <span>Phòng đơn</span></p>
                        <p class="r-rate">Đánh giá: 6.4 <i class="fas fa-star"></i></p>
                        <p class="r-pr">Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="slick-card">
                <div class="sl-body">
                    <img src="<?php echo $data["Dashboard"] ?>/public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    <div class="sl-content">
                        <h2>Ocean View Suite</h2>
                        <p class="r-type">Loại phòng: <span>Phòng đơn</span></p>
                        <p class="r-rate">Đánh giá: 6.4 <i class="fas fa-star"></i></p>
                        <p class="r-pr">Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="slick-card">
                <div class="sl-body">
                    <img src="<?php echo $data["Dashboard"] ?>/public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    <div class="sl-content">
                        <h2>Ocean View Suite</h2>
                        <p class="r-type">Loại phòng: <span>Phòng đơn</span></p>
                        <p class="r-rate">Đánh giá: 6.4 <i class="fas fa-star"></i></p>
                        <p class="r-pr">Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="slick-card">
                <div class="sl-body">
                    <img src="<?php echo $data["Dashboard"] ?>/public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    <div class="sl-content">
                        <h2>Ocean View Suite</h2>
                        <p class="r-type">Loại phòng: <span>Phòng đơn</span></p>
                        <p class="r-rate">Đánh giá: 6.4 <i class="fas fa-star"></i></p>
                        <p class="r-pr">Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="slick-card">
                <div class="sl-body">
                    <img src="<?php echo $data["Dashboard"] ?>/public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    <div class="sl-content">
                        <h2>Ocean View Suite</h2>
                        <p class="r-type">Loại phòng: <span>Phòng đơn</span></p>
                        <p class="r-rate">Đánh giá: 6.4 <i class="fas fa-star"></i></p>
                        <p class="r-pr">Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
</div>

<a target="_blank" href="https://www.facebook.com/huu.van.20x" class="messenger"><i  class="fab fa-facebook-messenger"></i></a>
<?php
require_once "./mvc/view/Blocks/Footer.php";
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/slick/slick.min.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/slick/slick.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/room.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>