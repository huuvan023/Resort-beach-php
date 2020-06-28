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
        <link rel="stylesheet" type="text/css" href="../Css/PasswordRecover.css">
        <link rel="stylesheet" type="text/css" href="../Css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../Css/Header.css">
        <link rel="stylesheet" type="text/css" href="../Css/Master.css">
    </head>
    <body onload="loadFunction()">
        <?php
        require_once "../Blocks/Loading.php";
        require_once "../Blocks/Header.php";
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
            require_once "../Blocks/Footer.php"
        ?>
        <script type="text/javascript" src="./../Js/PasswordRecover.js"></script>
    </body>
</html>
