<?php

require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['logged'])) {
    header('Location: http://localhost/barsukas/bankas/login/login.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banko darbuotojo paskirtis</title>
</head>
<body>
    <?php include __DIR__ . '/login/login-menu.php' ?>
    <?php include __DIR__ . '/login/login-msg.php' ?>
    <h1>Banko darbuotojo paskirtis</h1>
    <a href="http://localhost/barsukas/bankas/accList.php">Žiūrėti sąskaitas</a>
</body>
</html>


