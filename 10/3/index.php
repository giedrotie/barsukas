<!-- 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
<?php

$color = 'black';
if(isset($_GET['color'])){
    $color = $_GET['color'];
}
// elseif(isset($_POST['color'])) {
//     $color = $_POST['color'];
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web m 3</title>
</head>
<body style="background-color: #<?=$color?>;">
    <h1>Web mechanika 3</h1>
    <form action="." method="get">
        <div style="margin: 20px;">
            <span style="width:20px">Irasykite spalva:</span>
            <input type="text" name="color">
            <button type="submit">Keisti spalva</button>
        </div>
    </form>

</body>
</html>

