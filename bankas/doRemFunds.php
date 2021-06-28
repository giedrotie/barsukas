<?php
$id = $_GET['id'] ?? 0;
foreach ($accData as &$newAccount) {
    if($newAccount['id'] == $id) {

        //Validation
        if ($newAccount['amount'] < (int) $_POST['amount']) {
            setMessage('Tiek lėšų nėra!');
            redirectToAction('remFunds', $id);
        }else if( $_POST['amount'] < 0){
            setMessage('Įvesta neteisinga suma.');
            redirectToAction('remFunds', $id);
        }
        $newAccount['amount'] -= (int)$_POST['amount'];
        file_put_contents(__DIR__.'/data/accData.json', json_encode($accData));
        setMessage("Lėšos nuskaičiuotos!");
        doRedirect();
    }
}


