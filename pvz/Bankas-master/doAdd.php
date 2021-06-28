<?php
$id = $_GET['accountNo'] ?? 0;
if($_POST['amount'] < 0) {
    setMessage('Incorrect amount.');
    redirect('./?action=add&accountNo=' . $_GET['accountNo']);
} else {
    foreach ($accounts as &$account) {
        if ($account['accountNo'] == $id) {
            $account['amount']+= number_format($_POST['amount'], 2);
            file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
            setMessage('Added: ' . $_POST['amount'] . '€ to Account: ' . $account['accountNo']);
            unset($account);
            redirect('./?action=accounts');
        }
    }
}
