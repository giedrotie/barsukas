<?php 
setMessage('Logged off succesfully.');
unset($_SESSION['logged'], $_SESSION['name']);
redirect('');