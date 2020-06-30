<?php
require_once "./mvc/view/Blocks/Header.php";
require_once "./mvc/view/Blocks/Loading.php";
?>

<div class="wrap">
    <h2 class="title">
        Lấy lại mật khẩu
    </h2>
    <div class="line"></div>
    <form enctype="multipart/form-data">
            <div class="input-gr one">
                <div class="icon">
                <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="input-field">
                    <h5>Nhập email khôi phục</h5>
                    <input type="text" name="userName" class="input"
                    name="recoverPassword" class="input"  required />
                </div>
            </div>
        <input type="submit" class="btn" value="Lấy lại mật khẩu"> 
        </form>
</div>
<?php
require_once "./mvc/view/Blocks/Footer.php";
?>

<script type="text/javascript" src=<?php echo ( "/" . $data["Dashboard"] . "/mvc/view/Js/login.js");?>></script>
<script type="text/javascript" src=<?php echo ( "/" . $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>