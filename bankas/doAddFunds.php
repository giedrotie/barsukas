<?php
$id = $_GET['id'] ?? 0;
// print_r($accData);
// die;
foreach ($accData as &$account) {
    if($account['id'] == $id) {
        $account['amount'] += (int) $_POST['amount'];
        file_put_contents(__DIR__.'/data/accData.json', json_encode($accData));
        setMessage('Pridėta suma: ' . $_POST['amount']. ' Eur į sąskaitą: '. $account['id']);
        unset($account);
        doRedirect();
    }
}



