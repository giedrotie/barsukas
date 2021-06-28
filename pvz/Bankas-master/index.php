<?php
require __DIR__. '/bootstrap.php';



if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}

$accounts = json_decode( file_get_contents(__DIR__. './accounts.json'), 1);

//0. Check if logged

// if (!isset($_SESSION['logged'])) {
//     redirect('homepage.php');
// }

//1. Home atvaizdavimas GET

if(!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/homepage.php';
}


//2. Saskaitos pridejimo atvaizdavimas GET

elseif ($_GET['action'] == 'addAccount' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAccount.php';
}

//3. Saskaitos pridejimo vykdymas POST

else if($_GET['action'] == 'addAccount' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAccount.php';
}

//4. Saskaitos papildymo atvaizdavimas GET

else if($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/add.php';
}

//5. Saskaitos papildyumo vykdymas POST

else if($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAdd.php';
}

//6. Saskaitos minusavimo atvaizdavimas GET

else if($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/rem.php';
}

//7. Saskaitos minusavimo vykdymas POST

else if($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRem.php';
}

//8. Saskaitos istrynimo vykdymas POST

else if($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}

//9. Saskaitu atvaizdavimas GET

else if($_GET['action'] == 'accounts' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/accounts.php';
}

//10. Login duomenys POST

else if($_GET['action'] == 'login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/login.php';
}

//11. Logout duomenys GET
else if ($_GET['action'] == 'trans' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/transfer.php';
}