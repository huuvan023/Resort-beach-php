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
                            <input id="userPass" type="password" name="profilePass" placeholder="Mật khẩu..."
                            value="" class="input" required
                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$" autofocus 
                            oninvalid="this.setCustomValidity('Định dạng mật khẩu không đúng! (Mật khẩu từ 6-20 kí tự, bao gồm kí tự latin chữ thường, chữ hoa, kí tự đặt biệt và số )')"
                            oninput="this.setCustomValidity('')" title="Mật khẩu bao gồm kí tự, số, kí tự đặt biệt"  />
                        </div>
                        <div id="passwordStrength" style="margin-bottom: 0px;display: none;">
                            <small>Độ mạnh mật khẩu: </small>
                            <progress value="0" max="100" id="strength" style="max-width: 100%;"></progress>
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
require_once "./mvc/view/Blocks/Footer.php";
?>

<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/profile.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>
