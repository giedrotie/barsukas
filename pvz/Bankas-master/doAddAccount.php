<?php
$newAccount = true;
if(!empty($accounts)) {
    foreach($accounts as $account) {
        if(in_array($_POST['personalNo'], $account)) {
            setMessage('Personal Number is already in use.');
            $newAccount = false;
            redirect('./?action=addAccount');
        }
    }
}

$digit = $_POST['personalNo'];
if (!strlen($digit) == 11) {
    setMessage('Personal ID length is incorrect.');
    redirect('./?action=addAccount');
} else {
    $account = ['name' => $_POST['name'], 'surname' => $_POST['surname'], 'personalNo' => $digit, 'accountNo' => $_POST['accountNo'], 'amount' => 0];
        $accounts[] = $account;
        setMessage('Account: ' . $account['accountNo'] . ' created.');
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        header('Location: ./?action=accounts');
        die;
}

// if($newAccount) {    
//     $sum = 0;
//     $controlDigit = $sum % 11;
//     $multiplier = 1;
//     foreach(range(1, 10) as $key => $value) {
//         $numb = $digit[$key];
//         if($multiplier < 10) {
//             $sum += ($numb * $multiplier);
//             $multiplier++;
//         } else {
//             $multiplier = 1;
//             $sum += ($numb * $multiplier);
//             $multiplier++;
//         }
//     }
    
//     if($controlDigit == 10) {
//         $sum = 0;
//         $controlDigit = $sum % 11;
//         $multiplier = 3;
//         foreach(range(1, 10) as $key => $value) {
//             $numb = $digit[$key];
//             if($multiplier < 10) {
//                 $sum += ($numb * $multiplier);
//                 $multiplier++;
//             } else {
//                 $multiplier = 1;
//                 $sum += ($numb * $multiplier);
//                 $multiplier++;
//             }
//         }
//     }
// }

    // if($controlDigit == 10) {
    //     $controlDigit = 0;
    // }

    // else if(strlen($_POST['name']) < 3 && strlen($_POST['surname']) < 3) {
    //     setMessage('Name or Surname is too short.');
    //     redirect('./?action=addAccount');
    // }
    // else if(($digit[3] * 10 + $digit[4]) > 12) {
    //     setMessage('Personal ID month numbers are incorrect.');
    //     redirect('./?action=addAccount');
    // }
    // else if(($digit[5] * 10 + $digit[6]) > 31) {
    //     setMessage('Personal ID days numbers are incorrect.');
    //     redirect('./?action=addAccount');
    // }
    // else if ($digit[0] == range(1, 6)) {
    //     setMessage('First digit of personal ID is incorrect.');
    //     redirect('./?action=addAccount');
    // }
    // else if ($digit[10] == $controlDigit) {
    //     setMessage('Last digit of personal ID is incorrect.');
    //     redirect('./?action=addAccount');
    // } else {            
        
    // }
