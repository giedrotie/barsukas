<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Sąskaitų sąrašas</title>
</head>
<body>

<!-- <br><h6 style="float: left; margin-right: 30px; background-color: lightgray; padding: 20px;padding-right: 10rem; " >Labas</h6><br> -->
<?php include __DIR__ . '/login/login-menu.php' ?>
<?php include __DIR__ . '/login/login-msg.php' ?>

    <br><br>
    <div>
    <a style="margin-right: 30px; float: right;"class="btn btn-primary" href="?action=addAcc">Naujos sąskaitos sukūrimas</a>
    </div>

    <h1 style="margin-left: 30px;" >Sąskaitų sąrašas</h1><br><br>

    <?php require __DIR__ . '/msg.php'?>
    <?php require __DIR__ . '/generators/account.php'?>
    
    <?php
        usort($accData, function($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });



  
    ?>

            <?php foreach($accData as $index => $account) : 
                    printAccount($account);
                ?>
            
            <a class="btn btn-secondary" style="margin-left: 20px;" href="?action=addFunds&id=<?= $account['id']?>">Pridėti lėšų</a>
            <a class="btn btn-secondary" style="margin-left: 20px;" href="?action=remFunds&id=<?= $account['id']?>">Išimti lėšas</a>
            
            <form style="float: right; margin-right: 30px;"action="?action=delete&id=<?= $account['id']?>" method="post">
            <button class="btn btn-danger" type="submit" value="">Ištrinti  sąskaitą</button>
            </form>
            <br><br>
            

        <?php endforeach ?>    



</body>
</html>


