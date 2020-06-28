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
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="user-info">
                    <h2>Thông tin tài khoản</h2>
                    <div class="line"></div>
                    <div class="avatar">
                        <img src="../../../public/undraw_male_avatar_323b.svg" alt="">
                    </div>
                    
                    <div class="info row">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <h3>Tên tài khoản: </h3>
                            <h3>Họ tên: </h3>
                            <h3>Email: </h3>
                            <h3>Giới tính: </h3>
                            <h3>Số điện thoại: </h3>
                            <h3>Địa chỉ: </h3>
                        </div>
                        
                    </div>
                    <div class="change-info row">
                        <button onclick="onOpen()">Thay đổi thông tin</button>
                        <a href="#">Đăng xuất</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="cart">
                            <h2>Phòng đã đặt</h2>
                            <div class="line"></div>
                            <div class="list-book">
                                <a href="./../Pages/index.php">
                                    <div class="card-book">
                                        <img src="../../../public/gallery/s-19-the-anam-villas-3-bed-room-villa-cr-800x450.jpg" alt="">
                                        <div class="card-book-body">
                                            <h3>Ocean View Suite</h3>
                                        <p>Loại phòng: <span>Phòng đơn</span></p>
                                        <p>Giá phòng: <span>$500</span></p>
                                        </div>
                                    </div>
                                </a>

                                <a href="./../Pages/index.php">
                                    <div class="card-book">
                                        <img src="../../../public/gallery/s-19-the-anam-villas-3-bed-room-villa-cr-800x450.jpg" alt="">
                                        <div class="card-book-body">
                                            <h3>Ocean View Suite</h3>
                                        <p>Loại phòng: <span>Phòng đơn</span></p>
                                        <p>Giá phòng: <span>$500</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="booking-information">
                                <div class="information">
                                    <h5>Số phòng đã đặt : <span>1</span></h5>
                                    <h5>Tổng số tiền phải trả : <span>$1000</span></h5>
                                </div>
                                <div class="pay">
                                    <button id="pay-online">Thanh toán online</button>
                                    <button id="pay-to-check">Đặt phòng trước</button>
                                </div>
                            </div>
                        </div>
            </div>
            <div id="ovlClose" class="modified-account-overlay">
                <div class="overlay">
                        <h4>Thay đổi thông tin <span onclick="onClose()" class="close">&times;</span></h4> 
                    <form class="modified-form">
                        <div class="input-gr">
                            <label for="changeName">Thay đổi tên: </label>
                            <input type="text" name="changeName">
                        </div>
                        <div class="input-gr">
                            <label for="changeName">Thay đổi email: </label>
                            <input type="email" name="changeEmail">
                        </div>
                        <div class="input-gr">
                            <label for="changeGender">Thay đổi giới tính: </label>
                            <select name="changeGender">
                                <option>
                                    Nam
                                </option>
                                <option>
                                    Nữ
                                </option>
                            </select>
                        </div>
                        <div class="input-gr">
                            <label for="changePhoneNum">Thay đổi số điện thoại: </label>
                            <input type="text" name="changePhoneNum">
                        </div>
                        <div class="input-gr">
                            <label for="changeAddress">Thay đổi số địa chỉ: </label>
                            <textarea rows="2"></textarea>
                        </div>

                        <div id="change">
                            <label class="check">
                                <input type="checkbox" onchange="changeChecked()"
                                name="remember" id="ckbx">
                                <span class="checkmark" name="remember"></span>
                            </label>
                            <p>Thay đổi mật khẩu</p>
                        </div>
                        <div id="changePassword">
                            <div class="input-gr">
                                <label for="changePassword">Nhập mật khẩu hiện tại: </label>
                                <input type="password" name="changePassword">
                            </div>
                            <div class="input-gr">
                                <label for="confirmPassword">Xác nhận lại mật khẩu: </label>
                                <input type="password" name="comfirmPassword">
                            </div>
                        </div>
                        <div class="submitInfo" >
                            <button type="submit" name="changeInfo">Thay đổi</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            
        </div>
        <?php
            require_once "../Blocks/Footer.php";
        ?>
        <script type="text/javascript" src="./../Js/user.js"></script>
    </body>
</html>
