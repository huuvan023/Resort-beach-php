<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ao dep</title>
</head>
<body>
     <div style="width: 100%; background-color: red; height: 100px;"></div>
     <?php
     require_once "./mvc/view/Pages/Contact.php"; 
     ?>
     <?php
     require_once "./mvc/view/Pages/". $data["Page"] .".php"; 
     ?>
</body>
</html>