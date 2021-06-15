<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_SESSION['results'])) { // [kiek yra sugeneruota, kiek sugeneruota] [5,1]
    //1 scenarijus FORMOS RODYMAS, GET
    $letters = range('A', 'J');
    $count = rand(3, 10);
    $color = 'black';
    $form = true;

    }
    else {
    //2 scenarijus REZULTATU RODYMAS, GET
        $color = 'white';
        $form = false;
        $sugeneruota = $_SESSION['results'][0];
        $pazymeta = $_SESSION['results'][1];
        unset($_SESSION['results']);

    }



}

else {
    //3 scenarijus CHECKBOX'U SKAICIAVIMAS, kai metodas POST
    $_SESSION['results'][0] = $_POST['count'];
    $_SESSION['results'][1] = count($_POST['let']??[]);
    header('Location:http://localhost/barsukas/12/sesija.php');
    die;

  

    
}





    $letters = range('A', 'J');
    $count = rand(3, 10);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = 'white';
        $form = false;
    }
    else {
        $color = 'black';
        $form = true;
    }

    // _d($letters);
    // _d($_POST);   // $_POST['let'] == ['D', 'F']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 - 9</title>
</head>
<body style="background-color: <?= $color ?>">

    <a href="">BACK</a><br><br>

    <?php if($form) : ?>
        <form action="" method="post" style="background-color: gray;padding: 10px;">
        <input type="hidden" name="count" value="<?= $count ?>">
        <?php foreach ($letters as $letter): ?>
        <label><?= $letter ?></label>
        <input type="checkbox" name="let[]" value="<?= $letter ?>">
        <?php if (--$count === 0) break ?>
        <?php endforeach ?>
        <button type="submit">CAL</button>
        </form>
    <?php else : ?>
        <br>Sugeneruota: <?= $_POST['count'] ?>
        <br>Pažymėta: <?= count($_POST['let'] ?? []) ?>
    <?php endif ?>



</body>
</html>