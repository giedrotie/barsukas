<!-- 7.	Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->

<?php
_d($_SERVER['REQUEST_METHOD'], 'metodas ---- >');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "yellow";  //newer used (for debug only)
    header('Location: index.php'); // get
    die;

}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = "green";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web m 6</title>
</head>
<body style="background-color: <?=$color?>">
    <h1 style = "color: blue"> Web mechanika 6</h1>
    <form action="" method="get">
        <button type="submit">GET</button>
    </form>
    <form action="" method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>

