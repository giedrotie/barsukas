<!-- 9.	Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->

<?php
$color = "yellow";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "white";  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web m 9</title>
</head> 
<body style="background-color: <?=$color?>;">
    <h1 style = "color: blue"> Web mechanika 9</h1>
  
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<form action='' method='post'>";   

        foreach(range(1, rand(3,10)) as $index) {
            $value = chr(64 + $index);
            echo $value . "<input type='checkbox' name=checkbox_" . $index . " value=" . $value . "><br/>";
        } 

        echo '<button type="submit">Get values</button>';
        echo '</form>';

    } else
    {
       echo '<p>Value='.count($_POST).'</p>';
    }
?>

  
</body>
</html>
