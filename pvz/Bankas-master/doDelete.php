  
<?php
$id = $_GET['accountNo'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['accountNo'] == $id) {
        if($account['amount'] > 0) {
            setMessage('Account: ' . $account['accountNo'] . ' cannot be deleted.');
            redirect('./?action=accounts');
        } else {
            setMessage('Account: ' . $account['accountNo'] . ' deleted.');
            unset($accounts[$index]);
            file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
            redirect('./?action=accounts');
        }
    }
}