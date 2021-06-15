<!-- 2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->
<?php
_d($_SERVER['REQUEST_METHOD']);

$color = "black";
if(isset($_GET['color'])){
    $color = $_GET['color'];
}
_d($color, 'color');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web m 2</title>
</head>
<body style ="background-color: #<?=$color?>;">
    <h1 style = "color: yellow"> Web mechanika 2</h1>
    <h2>
        <a href="http://localhost/barsukas/10/2/index.php">Juoda</a> 
    </h2>
    <h2>
        <!-- <a href="http://localhost/barsukas/10/2/index.php?color=red">Raudona</a> 
    </h2>
    <h2>
        <a href="http://localhost/barsukas/10/2/index.php?color=brown">Brown</a> 
    </h2> -->

</body>
</html>




<!-- Astos var -->


<?php
  $color = "000000";
  if(isset($_GET['color'])){
        $color = $_GET['color'];
  }
    ?>


<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>WEB Mechanika</title>
      <style>
      body{
          background-color: #<?=$color?>;
      }
      a{
          display: block;
          color: white;
      }
      label{
        color: white;
      }
      .form-item{
          margin: 10px 30px;
      }
      </style>
  </head>
  <body>
      <form action="http://localhost/php-nd/web-mechanika/03" method="get">
      <label for="spalva" class="form-item">Fono spalva</label><br>
      <input type="text" name='color' class="form-item"> <br>
      <button type="submit" class="form-item">pakeisti fono spalva</button>
      </form>
  </body>
  </html>
