<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="btn btn-secondary" style="margin: 20px" href="http://localhost/barsukas/bankas/" role="button">Sąskaitų sąrašas</a>
        <?php if (!isset($_SESSION['logged'])) : ?>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-secondary" href="http://localhost/barsukas/bankas/login/login.php" role="button">Login</a>
     
        <?php else : ?>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-secondary" style="margin: 20px" href="http://localhost/barsukas/bankas/login/login.php?logout" role="button">Logout</a>
        <?php endif ?>
    </li>
    </ul>

</body>
</html>




