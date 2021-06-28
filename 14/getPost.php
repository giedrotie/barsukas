<?php

_d($_SERVER['REQUEST_METHOD'], 'METHOD:');
_d($_GET, 'GET:');
_d($_POST, 'POST:');
?>

<a href="http://localhost/barsukas/14/getPost.php">BACK</a>
<br><br>
<form action="http://localhost/barsukas/14/getPost.php?island=1" method="post">
    <input type="hidden" name="alio" value="reklama">
    <button type="submit" name="jaja" value="ding-gong">Mygiukas</button>
</form>