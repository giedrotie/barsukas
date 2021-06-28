<?php

require __DIR__ . '/validation.php';
function getAccounts(){
    if(!file_exists(__DIR__ . '/../data/accData.json')){
        file_put_contents(__DIR__ . '/../data/accounts.json', json_encode([])); // sukuriu faila ir idedu tuscia [] su json_encode
}

$accData = json_decode(file_get_contents(__DIR__ . '/../data/accData.json'), 1);
return $accData;
}

function saveNewAccount(&$accountData, &$account)
{

  $accountData[] = $account;
  
  file_put_contents(__DIR__.'/../data/accData.json', json_encode($accountData));
}

function createAccountObject(&$request)
{
  $newAccount = [
    'id' => rand(1,100), 
    'name' => $request['name'], 
    'surname' => $request['surname'], 
    'accNo' => $request['accNo'], 
    'personalNo' =>$request['personalNo'], 
    'balance' => '0',
    'valid' => true
  ];
  validateAccount($newAccount);
  return $newAccount;
}

function validateAccount(&$account)
{
  $validationMsg = nameValidation($account['name'], 'Vardas');
  if(!is_null($validationMsg)){
    addMessage($validationMsg);
    $account['valid'] = false;
  }
  $validationMsg = nameValidation($account['surname'], 'Pavarde');
  if(!is_null($validationMsg)){
    addMessage($validationMsg);
    $account['valid'] = false;
  }
  $validationMsg = personalNumValidation($account['personalNo']);
  if(!is_null($validationMsg)){
    addMessage($validationMsg);
    $account['valid'] = false;
  }
  
}

function isAccountValid(&$account)
{
  return $account['valid'];
}

function generateAccountGetParams(&$account)
{
  $result = null;
  if(isset($account['name']))
  {
    $result .= "name=" . $account['name'];
  }
  
  if(isset($account['surname']))
  {
    if(strlen($result) > 0)
      $result .= '&';
    $result .= "surname=" . $account['surname'];
  }

  if(isset($account['personalNo']))
  {
    if(strlen($result) > 0)
      $result .= '&';
    $result .= "personalNo=" . $account['personalNo'];
  }

  return $result;
}
?>