<?php
require_once "./mvc/view/Blocks/Header.php";
require_once "./mvc/view/Blocks/Loading.php";
?>

<div class="wrap">
    <h2 class="title">
        Đăng nhập
    </h2>
    <div class="line"></div>
        <form method="post" id="login" enctype="multipart/form-data" >
            <div id="wr-name" class="input-gr one">
                <div class="icon">
                <i class="fas fa-user"></i>
                </div>
                <div class="input-field">
                    <h5>Tài khoản</h5>
                    <input type="text" id="tk" value="<?php echo ( $data["Name"] );?>"
                     name="userName" class="input" />
                </div>
            </div>
        <div id="wr-pas" class="input-gr pass">
                <div class="icon">
                <i class="fas fa-lock"></i>
                </div>
                <div class="input-field">
                    <h5>Mật khẩu</h5>
                    <input type="password" value="<?php echo ( $data["Pass"] );?>"
                    id="ps" name="userPass" class="input" >
                </div>
            </div>
        <div class="input-field terms">
            <label class="check">
            <input type="checkbox" checked="true"
            name="remember" id="ckbx">
            <span class="checkmark" name="remember"></span>
            </label>
            <p>Nhớ mật khẩu</p>
        </div>
            <div class="login-control">
            <span id="registerNew">Chưa có tài khoản? <a href="<?php echo ( $data["Dashboard"] );?>/Login/LoginPage/register">Đăng kí</a></span>
            <a id="forgetPassword" href="<?php echo ( $data["Dashboard"] );?>/Login/LoginPage/resetPass">Quên mật khẩu?</a>
            </div>
        <input type="submit" class="btn" value="Đăng nhập"> 
        </form>
</div>
<?php
require_once "./mvc/view/Blocks/Footer.php";
?>

<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/login.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>
