<?php require __DIR__. '/bootstrap.php'; 

if (!isset($_SESSION['logged'])) {
    redirect('');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIT Bank</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?> 
    <?php include __DIR__ . '/msg.php' ?> 
</body>
</html>