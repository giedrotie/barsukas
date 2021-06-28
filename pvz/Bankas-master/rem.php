<?php 
if (!isset($_SESSION['logged'])) {
    redirect('');
}
?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Remove money</title>
      <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
      <?php include __DIR__ . '/menu.php' ?>
      <?php include __DIR__ . '/getInfo.php' ?>
      <?php include __DIR__ . '/msg.php' ?>

      <?php $id = $_GET['accountNo'] ?? 0 ?>
      <form action="?action=rem&accountNo=<?= $id ?>" method="post">
          <input type="text" name="amount" size="10">
          <button>Remove money</button>
      </form>
  </body>
  </html>