

<?php
require_once "./mvc/view/Blocks/Header.php";
?>
<div class="wrap">
    <!--Phần body-->            
    <section class="wrap-banner">
        <video style="width:100%;" autoplay loop muted >
            <source  src="<?php echo $data["Dashboard"] ?>/public/videobg.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <h1 class="overlay-header">
                Beach Resort
            </h1>

            <div class="line"></div>

            <div class="overlay-content">
                Chọn loại phòng yêu thích của bạn
            </div>

            <div class="overlay-button">
                <a href="./mvc/view/Pages/totalroom.php">Tất cả phòng</a>
            </div>

        </div>
    </section>
    <section data-aos="fade-down" class="gallery row">
        <!--Phần này là show ra bộ sưu tập hình và phòng mới     Trung làm -->
        <!--Màu của mấy dấu gạch dưới mấy chữ như bộ sưu tập là màu #CFCFCF -->
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h1>Bộ sưu tập</h1>
                <div class="line"></div>
                <div class="gallery-body">
                    <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#galleryCarousel" data-slide-to="1"></li>
                            <li data-target="#galleryCarousel" data-slide-to="2"></li>
                            <li data-target="#galleryCarousel" data-slide-to="3"></li>
                            <li data-target="#galleryCarousel" data-slide-to="4"></li>
                            <li data-target="#galleryCarousel" data-slide-to="5"></li>
                        </ol>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                            <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="a" style="width:100%;">
                            </div>
                    
                            <div class="item">
                            <img src="../../public/gallery/0b7ef7f4-z-cr-800x450.jpg" alt="b" style="width:100%;">
                            </div>
                            <div class="item">
                            <img src="../../public/gallery/0fde4ea6-z-cr-800x450.jpg" alt="c" style="width:100%;">
                            </div>
                            <div class="item">
                            <img src="../../public/gallery/1a36e6e5-z-cr-800x450.jpg" alt="c" style="width:100%;">
                            </div>
                            <div class="item">
                            <img src="../../public/gallery/2a000495-z-cr-800x450.jpg" alt="c" style="width:100%;">
                            </div>
                            <div class="item">
                            <img src="../../public/gallery/2cb2535e-z-cr-800x450.jpg" alt="c" style="width:100%;">
                            </div>
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#galleryCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#galleryCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>
        </div>
    </section>
    <section data-aos="fade-down" class="hot-room row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1>Thuê nhiều nhất</h1>
            <div class="line"></div>
            <div class="slick">
                <div class="slick-card row">
                    <div style="padding: 0;" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-item">  
                        <img src="../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slick-card-content">
                        <h2>Ocean View Suite</h2>
                        <p>Loại phòng: <span>Phòng đơn</span></p>
                        <p>Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
                <div class="slick-card row">
                    <div style="padding: 0;" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-item">  
                        <img src="../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slick-card-content">
                        <h2>Ocean View Suite</h2>
                        <p>Loại phòng: <span>Phòng đơn</span></p>
                        <p>Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
                <div class="slick-card row">
                    <div style="padding: 0;" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-item">  
                        <img src="../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slick-card-content">
                        <h2>Ocean View Suite</h2>
                        <p>Loại phòng: <span>Phòng đơn</span></p>
                        <p>Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
                <div class="slick-card row">
                    <div style="padding: 0;" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-item">  
                        <img src="../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slick-card-content">
                        <h2>Ocean View Suite</h2>
                        <p>Loại phòng: <span>Phòng đơn</span></p>
                        <p>Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
                <div class="slick-card row">
                    <div style="padding: 0;" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-item">  
                        <img src="../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 slick-card-content">
                        <h2>Ocean View Suite</h2>
                        <p>Loại phòng: <span>Phòng đơn</span></p>
                        <p>Giá phòng: <span>$500</span></p>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1>Phòng mới</h1>
            <div class="line"></div>
            <div class="new-room">
                <div class="room-card row">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 imgmid">
                        <img src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg">
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="room-card-content">
                            <h2>Ocean View Suite</h2>
                            <p>Loại phòng: <span>Phòng đơn</span></p>
                            <p>Giá phòng: <span>$500</span></p>
                            <a href="#">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="room-card row">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 imgmid">
                        <img src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg">
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="room-card-content">
                            <h2>Ocean View Suite</h2>
                            <p>Loại phòng: <span>Phòng đơn</span></p>
                            <p>Giá phòng: <span>$500</span></p>
                            <a href="#">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-in-down" class="room-type row">
        <div class="room-type-header">
            <h1>Loại phòng</h1>
            <div class="line"></div>
        </div>
        <div  class="type-wrap">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-3">
                <div class="type-card">
                    <div class="type-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="type-price-top">
                            <h6>$500 - $700</h6>
                            <p>mỗi đêm</p>
                        </div>
                        <div class="type-overlay">
                            <a href="#" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="type-foot">
                        Phòng VIP <i style="color: red;" class="far fa-gem"></i>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-3">
                <div class="type-card">
                    <div class="type-body">
                        <img src="../../public/gallery/0b7ef7f4-z-cr-800x450.jpg" alt="">
                        <div class="type-price-top">
                            <h6>$300 - $500</h6>
                            <p>mỗi đêm</p>
                        </div>
                        <div class="type-overlay">
                            <a href="#" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="type-foot">
                        Phòng gia đình
                    </div>
                </div>
            </div>
            <div   class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-3">
                <div class="type-card">
                    <div class="type-body">
                        <img src="../../public/gallery/0fde4ea6-z-cr-800x450.jpg" alt="">
                        <div class="type-price-top">
                            <h6>$100 - $300</h6>
                            <p>mỗi đêm</p>
                        </div>
                        <div class="type-overlay">
                            <a href="#">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="type-foot">
                        Phòng đơn
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="zoom-in-up" class="service">
        <!--Phần dịch vụ     Văn làm-->
        <div class="service-header row">
            <h1>Dịch vụ</h1>
        </div>
        <div class="service-line">
            <div class="line"></div>
        </div>
        <div class="service-body row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="service-card">
                        <h2 class="service-card-header">
                            <i class="fas fa-swimmer"></i>
                        </h2>
                        <div class="service-card-body">
                            <h4>Hồ bơi/Fitness</h4>
                            <p>
                                Đến với Resort Beach, quý khách sẽ được trải nghiệm hệ thống 
                                hồ bơi, phòng gym hiện đại và sang trọng bật nhất Việt Nam với khung cảnh hài 
                                hòa với thiên nhiên chắc chắn sẽ mang đến những trải nghiệm tuyệt vời.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="service-card">
                        <h2 class="service-card-header">
                            <i class="fas fa-glass-cheers"></i>
                        </h2>
                        <div class="service-card-body">
                            <h4>Quầy bar/Lounge</h4>
                            <p>Ngoài cung cấp các món đồ uống chất lượng cho khách,
                                quầy bar / lounge ở các khách sạn,
                                resort còn mang đến cho khách những sự trải nghiệm kèm theo việc thưởng thức đồ uống.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="service-card">
                        <h2 class="service-card-header">
                            <i class="fas fa-bus-alt"></i>
                        </h2>
                        <div class="service-card-body">
                            <h4>Xe đưa đón</h4>
                            <p>
                                Quý khách sẽ được hoàn toàn miễn phí giá cước xe khi tham quan những địa điểm trong thành phố.
                                Chúng tôi có một đội ngũ tài xế hùng hậu luôn đặt sự hài lòng của khách hàng lên hàng đầu.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>           
</div>
<!--Modal-->
    <div id="myModal" class="modal">
    <div class="modal-content">

        <div class="modal-header">
            <h2>TRỌN GÓI NGHỈ DƯỠNG ĐẲNG CẤP 4 SAO</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <h3>NHẬN NGAY ƯU ĐÃI GIỚI HẠN</h3><img id="hot-icon" src="../../public/hot-icon.gif">
            <p>> Chỉ 1 triệu đồng/ người</p>
            <p>> Phòng ở và các bữa ăn</p>
            <p>> Đầy đủ các dịch vụ tiện ích</p>
            <p>> Hàng loạt hỗ trợ + voucher hấp dẫn</p>
            
            <form>
                <div class="frm-gr">
                    <label>Họ và Tên: </label>
                    <input type="text" name="usrName">
                </div>
                <div class="frm-gr">
                    <label>Email: </label>
                    <input type="email" name="usrName">
                </div>
                <div class="frm-gr">
                    <label>Số điện thoại: </label>
                    <input type="text" name="usrName">
                </div>
                <div class="frm-gr">
                    <label>Thắc mắc( nếu có): </label>
                    <textarea name="ask" rows="1"></textarea>
                </div>
                <button type="submit">Nhận ngay ưu đãi giới hạn</button>
            </form>
        </div>

    </div>

    </div>
<div class="scrollToTop"><i id="toTop" class="fas fa-arrow-alt-circle-up"></i></div>
<a target="_blank" href="https://www.facebook.com/huu.van.20x" class="messenger"><i  class="fab fa-facebook-messenger"></i></a>

<?php
require_once "./mvc/view/Blocks/Footer.php";
?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/slick/slick.min.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/slick/slick.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/index.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>

