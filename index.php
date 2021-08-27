<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="image.php" alt="">
<h2>Картинка показана: <?php
    if(!file_exists('count.txt')) echo 1;
    else echo file_get_contents('count.txt'); ?> раз</h2>
</body>
</html>