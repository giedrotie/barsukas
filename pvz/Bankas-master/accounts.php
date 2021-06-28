<?php 
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
    <title>Accounts</title>
    <link rel="stylesheet" href="./css/main.css">

</head>
<body>
    <?php include __DIR__. '/menu.php' ?>
    <?php include __DIR__. '/msg.php' ?>

    <div class="infoRow">            
        <div class="infoItem infoAccount">Account number</div>  
        <div class="infoItem">Surname</div>  
        <div class="infoItem">Name</div> 
        <div class="infoItem">Personal ID</div> 
        <div class="infoItem last">Balance</div>
    </div>
    <?php
    usort($accounts, function ($a, $b) {    
        return $a['surname'] <=> $b['surname'];
    });
    foreach($accounts as $account) : ?>
        <div class="infoBlock">            
            <div class="infoColumn accountNo"><?= $account['accountNo'] ?></div>  
            <div class="infoColumn"><?= $account['surname'] ?></div>  
            <div class="infoColumn"><?= $account['name'] ?> </div> 
            <div class="infoColumn"><?= $account['personalNo'] ?> </div> 
            <div class="infoColumn last"><?= number_format($account['amount'], 2) ?>€</div>  
            [<a class="addRem" href="?action=add&accountNo=<?= $account['accountNo'] ?>">Add</a>]
            [<a class="addRem" href="?action=rem&accountNo=<?= $account['accountNo'] ?>">Remove</a>]
            [<a class="addRem" href="?action=trans&accountNo=<?= $account['accountNo'] ?>">Transfer</a>]
            <form class="deleteBtn" action="?action=delete&accountNo=<?= $account['accountNo'] ?>" method="post">
            <button type="submit">Delete account</button>
            </form>
        </div>
    <?php endforeach ?>

</body>
</html>