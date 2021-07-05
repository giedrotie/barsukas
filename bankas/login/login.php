<?php
require __DIR__ . '/../bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logout'])) {
        //2. Atjungia juseri
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Viso gero, Jūs sėkmingai atsijungėte!');
        header('Location: http://localhost/barsukas/bankas/login/login.php');
        die;
    }
        //1. Rodyti forma
}
else {
    //2. Tikrint prisijungimo duomenis
    $users = json_decode( file_get_contents(__DIR__.'/../data/users.json'), 1);
    foreach ($users as $user) {
        if ($user['name'] == $_POST['name']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['name'] = $user['name'];
                setMessage('Sveiki, '.$user['name'].', sveikiname prisijungus!');
                header('Location: http://localhost/barsukas/bankas/');
                die;
            }
        }
    }
    setMessage('Blogi prisijungimo duomenys. Bandykite dar kartą!');
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
    <title>Login</title>
</head>
<body>
    <?php include __DIR__ . '/login-msg.php' ?>

    <h1 style="margin-left: 40px; margin-top: 40px">Prisijungimas prie banko</h1>
    <form style="margin: 40px" action="http://localhost/barsukas/bankas/login/login.php" method="post">
    <label for="text">Prisijungimo vardas</label>
    <input style="margin-left:20px" type="text" name="name"><br><br>

    <label for="text">Slaptažodis</label>
    <input style="margin-left:75px" type="password" name="pass"><br><br>
    <button class="btn btn-primary" style="margin-right: 20px; type="submit">Prisijungti</button>
    
    </form>
</body>
</html>




