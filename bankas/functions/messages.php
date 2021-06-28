<?php

function setError($value)
{
    $_SESSION['validation_error'] = $value; 
}

function getError()
{
    return $_SESSION['validation_error'];
}


function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function resetErrorMessage()
{
    unset($_SESSION['msg']); 
}
function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}


function addMessage(string $msg)
{
    $_SESSION['msg'] = $_SESSION['msg'] . $msg;
}
function prefixMessage(string $msg)
{
    $_SESSION['msg'] = $msg . $_SESSION['msg'];
}
?>