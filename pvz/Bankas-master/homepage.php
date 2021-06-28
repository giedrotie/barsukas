
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php include __DIR__ . '/msg.php' ?> 
    <h1>Welcome</h1>
    <div>

    </div>
    <form action="?action=login" method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <button type="submit">Login</button>
    </form>
    
</body>
</html>