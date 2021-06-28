
<?php


$newAccount = createAccountObject($_POST);

 if(!isAccountValid($newAccount)){
    prefixMessage('NETEISINGAI ĮVESTI DUOMENYS:'.'<br><br>');
    redirectToNewAccountPage($newAccount);
 }

 saveNewAccount($accData, $newAccount);


 setMessage("Nauja sąskaita pridėta!");
 doRedirect();

