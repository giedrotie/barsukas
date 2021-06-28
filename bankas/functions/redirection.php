<?php
$PAGE_ROOT='http://localhost/barsukas/bankas';

function doRedirect(){
    header('Location:http://localhost/barsukas/bankas');
    die;
}


function redirectToAction($action, $id = 0)  
{
    if ($id) {
        header('Location: http://localhost/barsukas/bankas/?action='.$action.'&id='.$id);
    }
    else {
        header('Location: http://localhost/barsukas/bankas/?action='.$action);
    }
    die;
}


function redirectToNewAccountPage(&$account){
    $url = 'Location:http://localhost/barsukas/bankas/?action=addAcc';
    $url .= '&'. generateAccountGetParams($account);
    header($url);
    die;
}
