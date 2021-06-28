<?php
$id = $_GET['accountNo'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['accountNo'] == $id) {
        echo "<span>" . $account['name'] . ' ' . $account['surname'] . '. Funds: ' . number_format($account['amount'], 2) . '€.' . "</span>";       
    }
}