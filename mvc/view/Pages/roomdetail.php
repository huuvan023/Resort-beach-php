<!DOCTYPE html>
<html>
    <head>
        <title>
            Trang chủ
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" type="text/css" href="../Css/roomdetail.css">
        <link rel="stylesheet" type="text/css" href="../Css/Master.css">
        <link rel="stylesheet" type="text/css" href="../Css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../Css/Header.css">
    </head>
    <body onload="loadFunction()">
        <?php
            require_once "../Blocks/Loading.php";
            require_once "../Blocks/Header.php";
        ?>

        <div class="wrap">

            <section class="wrap-banner row">
                <div class="overlay">
                    <h1 class="overlay-header">
                        Ocean View Suite 
                    </h1>
                    <div class="line"></div>
                    <div class="overlay-button">
                        <a href="./../Pages/index.php">Trang chủ</a>
                    </div>
                </div>
            </section>
            
            <section class="room-detail-gallery row">
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
                    <img src="../../../public/gallery/s-13-the-anam-the-indochine-restaurant-vii-cr-800x450.jpg" alt="a">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
                    <img src="../../../public/gallery/s-15-the-anam-beach-ocean-cr-800x450.jpg" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-2 room-detail-gallery-img">
                    <img src="../../../public/gallery/khu-nghi-duong-the-anam-nha-trang-128-800x450.jpg" alt="b">
                </div>

            </section>

            <section class="room-detail-info row">
        
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
       
            <section class="room-other">
                <h1>Phòng khác</h1>
                <div class="line"></div>
                <div class="slick">
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="slick-card col-xs-11 col-sm-11 col-md-11 col-lg-11 p-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2 card-item">  
                            <img src="../../../public/gallery/s-30-the-anam-lang-viet-restaurant-cr-800x450.jpg" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                            <h2>Ocean View Suite</h2>
                            <div class="slcard-body">
                                <div>
                                    <p>Đánh giá: <span>6.3</span></p>
                                    <p>Loại phòng: <span>Phòng đơn</span></p>
                                    <p class="pr">Giá phòng: <span>$.500</span></p>
                                </div>
                                <a href="#">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>  

                    
                </div>
            </section>
        </div>
       
        <a target="_blank" href="https://www.facebook.com/huu.van.20x" class="messenger"><i  class="fab fa-facebook-messenger"></i></a>
        <?php
        require_once "../Blocks/Footer.php";
        ?>
    <script type="text/javascript" src="./../slick/slick.min.js"></script>
    <script type="text/javascript" src="./../slick/slick.js"></script>
    <script type="text/javascript" src="../Js/roomdetail.js"></script>
    </body>
</html>
