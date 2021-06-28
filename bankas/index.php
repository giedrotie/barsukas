<?php 
session_start();
// require __DIR__ . '/bootstrap.php';

if (!isset($_SESSION['logged'])) {
    header('Location: http://localhost/barsukas/bankas/login/login.php');
    die;
}


require __DIR__ . '/functions/redirection.php';
require __DIR__ . '/functions/messages.php';
require __DIR__ . '/functions/account.php';


// account['account id' =>1, 'name' => Jonas, 'pavarde' => Jonaitis, 'IBAN' => 'LT1234 0000 0000 0000', 'personalNo'=> 40001010000,'balance' => 0, 'pass' => 202cb962ac59075b964b07152d234b70 ]

$accData = getAccounts();



//1. Saskaitu saraso atvaizdavimas GET
if(!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET' ){
    require __DIR__ . '/accList.php';
}

//2. Lesu pridejimo atvaizdavimas GET
elseif($_GET['action'] == 'addFunds' && $_SERVER['REQUEST_METHOD'] == 'GET' ){
    require __DIR__ . '/addFunds.php';
}


//3. Lesu pridejimo vykdymas POST
elseif ($_GET['action'] == 'addFunds' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddFunds.php';
}
//4. Lesu nuskaiciavimo (formos) atvaizdavimas GET

elseif ($_GET['action'] == 'remFunds' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/remFunds.php';
}

//5. Lesu nuskaiciavimo vykdymas POST
elseif ($_GET['action'] == 'remFunds' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRemFunds.php';
}

//6. Naujos saskaitos sukurimas (atvaizdavimas) GET
elseif($_GET['action'] == 'addAcc' && $_SERVER['REQUEST_METHOD'] == 'GET' ){
    require __DIR__ . '/addAcc.php';
}

//7. Naujos saskaitos sukurimo(vykdymas) POST
elseif($_GET['action'] == 'addAcc' && $_SERVER['REQUEST_METHOD'] == 'POST' ){
    require __DIR__ . '/doAddAcc.php';
}

//8. Saskaitos trynimo vykdymas POST 
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
   // _d('delete');
    _d($newAccount['id'], 'id');
    require __DIR__. '/doDelete.php';
}

?>

