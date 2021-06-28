<?php
$users = json_decode( file_get_contents(__DIR__.'/data/users.json'), 1);
foreach ($users as $user) {
    if ($user['user'] == $_POST['user']) {
        if ($user['pass'] == md5($_POST['pass'])) {
            $_SESSION['logged'] = 1;
            $_SESSION['user'] = $user['user'];
            setMessage('Welcome ' . $user['user']);
            redirect('home.php');
        }
    }
}
header('Location: http://localhost/bankas/');
die;

