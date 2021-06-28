<?php

$id = $_GET['id'] ?? 0;
foreach ($accData as $index => $account) {
    if($account['id'] == $id) {
        if($account['amount'] == 0 ){
            unset($accData[$index]);
            file_put_contents(__DIR__.'/data/accData.json', json_encode($accData));
            setMessage("Sąskaita ištrinta!");
            doRedirect();
        } else {
            setMessage("Sąskaita negali būti ištrinta, nes joje yra lėšų!");
            doRedirect();
        }
    
    }
}
