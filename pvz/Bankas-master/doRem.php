  
<?php
$id = $_GET['accountNo'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['accountNo'] == $id) {
        if ($account['amount'] < $_POST['amount']) {
            setMessage('Insufficient funds');
            redirect('./?action=rem&accountNo=' . $account['accountNo']);  
        } elseif ($_POST['amount'] < 0) {
            setMessage('Incorrect amount.');
            redirect('./?action=rem&accountNo=' . $account['accountNo']); 
        } else {
            $account['amount'] -= number_format($_POST['amount'], 2);
            file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
            setMessage('Withdrawn: ' . $_POST['amount'] . '€ from Account: ' . $account['accountNo']);
            redirect('./?action=accounts');        
        }
    }         
}