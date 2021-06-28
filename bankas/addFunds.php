<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti lėšas</title>
</head>
<body>
<!-- <br><h6 style="float: left; margin-right: 30px; background-color: lightgray; padding: 20px;padding-right: 10rem; " >Login menu</h6><br> -->
<?php include __DIR__ . '/login/login-menu.php' ?>
<?php include __DIR__ . '/login/login-msg.php' ?>

<?php require __DIR__ . '/generators/account.php'?>
    
    <h1 style="text-align: center; margin-bottom: 50px;margin-top: 20px;">Lėšų pridėjimas</h1>

  
    <?php 
   
    $id = $_GET['id'] ?? 0;
    foreach ($accData as $index => $account) {
       if($account['id'] == $id) {
           printAccount($account);
       }
    }

    ?>

    <form style=" margin-left: 30px" action="?action=addFunds&id=<?= $id ?>" method="post"><br>
        <label style=" margin-right: 10px" for="amount">Suma kiek pridėti</label>
        <input type="number" name="amount">

        <button style="margin-left: 20px;" class="btn btn-danger" type="submit">Pridėti į sąskaitą</button>
    </form>
    <a style="margin-left: 30px; margin-top: 20px;"class="btn btn-outline-primary" href="./" role="button">Grįžti atgal</a>

</body>
</html>

