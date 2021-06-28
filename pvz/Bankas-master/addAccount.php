<?php 
if (!isset($_SESSION['logged'])) {
    redirect('');
}

$accountID = 'LT13';
foreach(range(1,16) as $_) {
    $accountID .= rand(0, 9);
}
while(in_array($accountID, $accounts)) {
    $accountID = 'LT13' . str_repeat(range(0 - 9), 16);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add account</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
    <?php include __DIR__ . '/msg.php' ?>

    <form class="addAccForm" action="?action=addAccount" method="post">
        <div class="inputLine">
            <label class="inputLabel" for="">Name:</label>   
            <input class="inputBox" type="text" name="name">
        </div>
        <div class="inputLine"> 
            <label class="inputLabel" for="">Surname:</label>   
            <input class="inputBox" type="text" name="surname">
        </div>
        <div class="inputLine">
            <label class="inputLabel" for="">Personal number:</label>   
            <input class="inputBox" type="text" name="personalNo">
        </div>
        <div class="inputLine">
            <label class="inputLabel" for="">Account number:</label>
            <input class="inputBox" type="text" name="accountNo" value="<?= $accountID ?>" readonly>
        </div>
        <div class="createButtonLine">
            <button class="creaButton" type="submit">Create account</button>
        </div>
    </form>
</body>
</html>