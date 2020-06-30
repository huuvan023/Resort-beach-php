<?php
    require_once "./mvc/view/Blocks/Loading.php";
    require_once "./mvc/view/Blocks/Header.php";
?>

<div class="wrap">

    <section  class="wrap-banner row">
        <div class="overlay">
            <h1 class="overlay-header">
                Phòng                    </h1>
            <div class="line"></div>
            <div class="overlay-button">
                <a href="./../Pages/index.php">Trang chủ</a>
            </div>
        </div>
    </section>

    <section data-aos="fade-down" class="search-room row">
        <div class="search-room-header">
            <h1>Tìm phòng</h1>
            <div class="line"></div>
        </div>
        
        <div class="search-room-body">
            <form>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="frm-group">
                        <label for = "name">Tìm theo tên: </label>
                        <input name = "name" type="text">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="frm-group">
                        <label for = "type">Tìm theo loại: </label>
                        <select>
                            <option>Tất cả</option>
                            <option>Phòng V.I.P</option>
                            <option>Phòng gia đình</option>
                            <option>Phòng đơn</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="frm-group">
                        <label for = "name">Tìm theo giá: <span id="labelPrice"></span></label>
                        <input id="inputPrice" name = "price" value="0" type="range" max="2000" min="100">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="frm-group">
                        <label for = "rating">Số người tối đa: </label>
                        <select>
                            <option>Tất cả</option>
                            <option>1 người</option>
                            <option>2 người</option>
                            <option>5 người</option>
                            <option>10 người</option>
                            <option>20 người</option>
                        </select>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;align-items: center;" 
                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 mb-2"> 
                    <button type="submit" name ="submit">Tìm kiếm</button>
                </div>
            </form>
        </div>
    </section>
    
    <section data-aos="fade-down" class="room-list row">
        <div class="room-list-header ">
            <h1>Tất cả phòng</h1>
            <div class="line"></div>
        </div>


        <div class="room-sort-view ">
                <div class="room-sort">
                    <h4>Sắp xếp: </h4>
                    <span>
                    <select>
                        <option>
                            Theo tên A-Z
                        </option>
                        <option>
                            Theo tên Z-A
                        </option>
                        <option>
                            Theo giá thấp lên cao
                        </option>
                        <option>
                            Theo giá cao xuống thấp
                        </option>
                        <option>
                            Theo đánh giá
                        </option>
                        <option>
                            Theo phòng mới nhất
                        </option>
                        </select>
                    </span>
                </div>
                <div class="room-view">
                    <h4>Xem: </h4>
                    <span>
                    <i id="listViewbtn" class="fas fa-th-list"></i>
                    <i id="gridViewbtn" class="fas fa-th-large"></i>
                    </span>
                </div>
        </div>

        <div id="gridView" class="room-list-body">
            

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="room-list-card">
                    <div class="room-list-card-body">
                        <img src="../../public/gallery/073a5b73-z-cr-800x450.jpg" alt="">
                        <div class="room-list-top">
                            <div class="room-list-price-top">
                                <h6>$500</h6>
                                <p>mỗi đêm</p>
                            </div>
                            <div class="room-list-rate-top">
                                6.3 <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="room-list-overlay">
                            <a href="./../Pages/roomdetail.php" >Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="room-list-foot">
                        <span>Phòng đơn</span>Triple Basic
                    </div>
                </div>
            </div>


    


        </div>
        <div id="listView" class="nonedisplay">
            <a href="./../Pages/roomdetail.php">
                <div class="room-list-body-listview">
                    <img class="room-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                    <div class="room-card-content">
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
                    <div class="room-card-price">
                        <div class="room-card-rate">
                            <p>Đánh giá:</p> <span>6.3</span>
                        </div>
                        <div class="room-card-price">
                            <p id="bk-title">Giá: </p>
                            <p>$.500</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="./../Pages/roomdetail.php">
                <div class="room-list-body-listview">
                    <img class="room-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                    <div class="room-card-content">
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
                    <div class="room-card-price">
                        <div class="room-card-rate">
                            <p>Đánh giá:</p> <span>6.3</span>
                        </div>
                        <div class="room-card-price">
                            <p id="bk-title">Giá: </p>
                            <p>$.500</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="./../Pages/roomdetail.php">
                <div class="room-list-body-listview">
                    <img class="room-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                    <div class="room-card-content">
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
                    <div class="room-card-price">
                        <div class="room-card-rate">
                            <p>Đánh giá:</p> <span>6.3</span>
                        </div>
                        <div class="room-card-price">
                            <p id="bk-title">Giá: </p>
                            <p>$.500</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="./../Pages/roomdetail.php">
                <div class="room-list-body-listview">
                    <img class="room-img" src="../../public/gallery/s-20-the-anam-lobby-cr-800x450.jpg" alt=""/>
                    <div class="room-card-content">
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
                    <div class="room-card-price">
                        <div class="room-card-rate">
                            <p>Đánh giá:</p> <span>6.3</span>
                        </div>
                        <div class="room-card-price">
                            <p id="bk-title">Giá: </p>
                            <p>$.500</p>
                        </div>
                    </div>
                </div>
            </a>
                
        </div>
        
    </section>
</div>
<a target="_blank" href="https://www.facebook.com/huu.van.20x" class="messenger"><i  class="fab fa-facebook-messenger"></i></a>
<?php
require_once "./mvc/view/Blocks/Footer.php";
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/room.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>