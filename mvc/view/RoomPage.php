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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href= <?php echo ( "/" . $data["Dashboard"] . "/mvc/view/slick/slick.css");?>>
        <link rel="stylesheet" type="text/css" href= <?php echo ( "/" . $data["Dashboard"] . "/mvc/view/slick/slick-theme.css");?>>
        <link rel="stylesheet" type="text/css" href= <?php echo ( "/" . $data["Dashboard"] . "/mvc/view/Css/Master.css");?>>
        <link rel="stylesheet" type="text/css" href= <?php echo ( "/" . $data["Dashboard"] . "/mvc/view/Css/". $data["Page"] .".css");?>>
    </head>
    <body onload="loadFunction()">
            <?php
                include_once "Pages/". $data["Page"] .".php";
            ?>
    </body>
</html>
