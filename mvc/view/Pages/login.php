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
        <link rel="stylesheet" type="text/css" href="../Css/login.css">
        <link rel="stylesheet" type="text/css" href="../Css/Header.css">
        <link rel="stylesheet" type="text/css" href="../Css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../Css/Master.css">
    </head>
    <body onload="loadFunction()">
        <?php
        require_once "../Blocks/Loading.php";
        require_once "../Blocks/Header.php";
        ?>

        <div class="wrap">
            <h2 class="title">
                Đăng nhập
            </h2>
            <div class="line"></div>
             <form  enctype="multipart/form-data" >
                 <div class="input-gr one">
                     <div class="icon">
                        <i class="fas fa-user"></i>
                     </div>
                     <div class="input-field">
                         <h5>Tài khoản</h5>
                         <input type="text" name="userName" class="input" />
                     </div>
                 </div>
                <div  class="input-gr pass">
                     <div class="icon">
                        <i class="fas fa-lock"></i>
                     </div>
                     <div class="input-field">
                         <h5>Mật khẩu</h5>
                         <input type="password" name="userPassword" class="input" >
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
                    <span id="registerNew">Chưa có tài khoản? <a href="./../Pages/register.php">Đăng kí</a></span>
                    <a id="forgetPassword" href="./../Pages/PaswordRecover.php">Quên mật khẩu?</a>
                 </div>
            	<input type="submit" class="btn" value="Đăng nhập"> 
             </form>
        </div>
        <a href="./../../view/Pages/user.php">asda</a>
        <?php
            require_once "../Blocks/Footer.php";
        ?>
    <script type="text/javascript" src="./../Js/login.js"></script>
    </body>
</html>
