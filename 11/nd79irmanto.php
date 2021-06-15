<?php
    $color = 'black';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location: http://localhost/barsukas/07/10uzduotis.php?count=" . count($_POST) . "&sugeneruota=" . $_POST['sugeneruota']);
        die;
    }

    if(isset($_GET['count'])) {
        $color = 'white';
        echo "<h1>" . $_GET['count'] . "</h1>";
        echo '<br>';
        echo "<h2>" . $_GET['sugeneruota'] . "</h2>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzduotis</title>
</head>
<?php
if(!isset($_GET['count'])) {
    echo "<body style='background-color: $color'>";
    echo "<form style='background-color: white' action='http://localhost/barsukas/07/10uzduotis.php' method='post'>";   
    $counter = 0;
    foreach(range(1, rand(3,10)) as $key) {
        $counter++;
        $random = chr(rand(65, 67));
        echo $random . "<input type='checkbox' name=" . $key . " value=" . $random . ">";
    } 
    echo "<input type='hidden' name='sugeneruota' value='$counter'>";
    echo '<button type="submit">GO</button>';
    echo '</form>';
}
?>
</body>
</html>