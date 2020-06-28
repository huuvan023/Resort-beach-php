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
            
            <section style="z-index: 1;" class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p-0">
                <ul class="profileTab">
                    <li>
                        <a href="/WebProject-2020-master/mvc/view/Pages/profile.php" class="tabActive" href="#"><i class="fas fa-user-alt"></i>Hồ sơ</a>
                    </li>
                    <li>
                        <a href="/WebProject-2020-master/mvc/view/Pages/booking.php"><i class="far fa-check-square"></i>Đặt phòng</a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-bell"></i>Thông báo</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                    </li>
                </ul>
            </section>
            
            <section style="z-index: 0;" class="col-xs-12 col-sm-8 col-md-9 col-lg-9 p-0">
                    <div class="wrap-content-profile">
                        <h2>Thông tin người dùng</h2>
                        <div class="cardWrap">
                            <div class="cardProfile first">
                                <span id="logoName">V</span>
                                <div class="profileDetail">
                                    <h3>Họ & Tên: </h3>
                                    <span>Hữu Văn</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content1" class="content">
                                <form action="/mvc/core/Controller.php" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" placeholder="Văn" autofocus="true" name="profileName"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Họ</label>
                                        <input type="text" placeholder="Ngô" name="profileFirstName"/>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content1')">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="cardWrap">
                            <div class="cardProfile">
                                <div class="profileDetail">
                                    <h3>Email: </h3>
                                    <span>vancuteo@gmail.com</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content2" class="content">
                                <form action="" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Nhập Email mới</label>
                                        <input type="email" name="profileName"/>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content2')">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="cardWrap">
                            <div class="cardProfile">
                                <div class="profileDetail">
                                    <h3>Mật khẩu: </h3>
                                    <span>*********</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content3" class="content">
                                <form action="" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Nhập mật khẩu mới</label>
                                        <input type="password" name="profileName"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" name="profileName"/>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content3')">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="cardWrap">
                            <div class="cardProfile">
                                <div class="profileDetail">
                                    <h3>Giới tính: </h3>
                                    <span>Nam</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content4" class="content">
                                <form action="" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select>
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                        </select>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content4')">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="cardWrap">
                            <div class="cardProfile">
                                <div class="profileDetail">
                                    <h3>Số điện thoại: </h3>
                                    <span>012345678</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content5" class="content">
                                <form action="" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="profileName"/>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content5')">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="cardWrap">
                            <div class="cardProfile">
                                <div class="profileDetail">
                                    <h3>Địa chỉ: </h3>
                                    <span>ahihi</span>
                                </div>
                                <span id="modifyProfile">Chỉnh sửa</span>
                            </div>
                            <div id="content6" class="content">
                                <form action="" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <textarea rows="2"></textarea>
                                    </div>
                                    <button type="submit">Lưu</button>
                                    <a href="#" onclick="handleToggle('content6')">Hủy</a>
                                </form>
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
