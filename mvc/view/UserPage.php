<!DOCTYPE html>
<html>
    <head>
        <title>
<<<<<<< HEAD
            <?php
            if ( $data["Page"] == "profile" ) {
                    echo "Hồ sơ";
            }
            if ( $data["Page"] == "booking" ) { 
                echo "Đặt phòng";
            }?>
        </title>
        <link rel="shortcut icon" href="/public/logo.svg" type="image/x-icon">
=======
            Trang chủ
        </title>
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href= <?php echo ( $data["Dashboard"] . "/mvc/view/Css/Master.css");?>>
        <link rel="stylesheet" type="text/css" href= <?php echo ( $data["Dashboard"] . "/mvc/view/Css/profile.css");?>>
    </head>
    <body onload="loadFunction()">
        <?php
<<<<<<< HEAD
            if( isset($_SESSION["user"]) ){
                include_once "Pages/". $data["Page"] .".php";
            }
            else {
                header("Location: http://localhost/WebProject-2020/Login/LoginPage/login");
            }
            
=======
            include_once "Pages/". $data["Page"] .".php";
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
        ?>
    </body>
</html>
