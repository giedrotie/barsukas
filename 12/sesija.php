<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') { // kai sesijone nera irasyta jokio rezultato, mes turime rodyti tuscia forma
    if (!isset($_SESSION['results'])) {   // [5, 1]  [sugeneruota, pazymeta] <-- cia i sesija irasomi rezultatai
    // 1 scenarijus Formos Rodymas GET
    $letters = range('A', 'J');
    $count = rand(3, 10);
    $color = 'black';
    $form = true;
    }
    else { // kai sesijoje jau yra irasytas rezultatas
    // 2 scenarijus Rezultatų Rodymas GET
    $color = 'white';
    $form = false;
    $sugeneruota = $_SESSION['results'][0]; // cia priskirimi rezultatai naujiems kintamiesiems, kad galima butu unsettint sesija
    $pazymeta = $_SESSION['results'][1];
    unset($_SESSION['results']); // butina unsetinti sesija, kitaip sekanti karta rodys tik pirmos  sesijos rezultatus
    }
}
else {
    // 3 scenarijus Checkboksų skaičiavimas (duomenu apdorojimas) POST
    // nieko niekam niekada neatvaizduoja nes tai yra POST 
    $_SESSION['results'][0] = $_POST['count'];
    $_SESSION['results'][1] = count($_POST['let'] ?? []);
    header('Location: http://localhost/barsukas/12/sesija.php');
    die;
}
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
        <br>Sugeneruota: <?= $sugeneruota ?>
        <br>Pažymėta: <?= $pazymeta ?>
    <?php endif ?>
</body>
</html>