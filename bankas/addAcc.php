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
    <title>Sukurti naują sąskaitą</title>
</head>
<body>

    <br>
    <h1 style="text-align: center; margin-top: 30px;">Naujos sąskaitos sukūrimas</h1>
    <form style="margin-right: 120px; margin-left: 120px; margin-top: 40px; margin-bottom: 30px;" action="?action=addAcc" method="post">
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" class="form-control" name="name" 
            value="<?= (isset($_GET['name'])) ?  $_GET['name'] : ""?>" >


            <label for="name">Pavardė</label>
            <input type="text" class="form-control" name="surname"
            value="<?= (isset($_GET['surname'])) ?  $_GET['surname'] : ""?>" >

            <label for="accNo">Sąskaitos numeris</label>
            <?php require __DIR__. '/generateAccNo.php'; ?>
            <input class="text; form-control" type="text" name="accNo" value="LT<?= $genAccNo ?>" readonly>
        

            <label for="personalNo">Asmens kodas</label>
            <input type="text" class="form-control" name="personalNo"
            value="<?= (isset($_GET['personalNo'])) ?  $_GET['personalNo'] : ""?>" ><br>
    
            <button class="btn btn-primary" style="margin-right: 20px;">Sukurti naują sąskaitą</button>
            <a class="btn btn-outline-primary" href="./" role="button">Grįžti atgal</a>
            </div>
    </form>
        <?php require __DIR__ . '/msg.php'?>

      
        
  
</body>
</html>
