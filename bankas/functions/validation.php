<?php

// vardui validuoti
function nameValidation($data, $prefix){
    $result = null;
    if(strlen($data) < 3)
      $result .= $prefix . ' turi būti ilgesnis nei 3 simboliai!'.'<br>';
    if(is_numeric($data) == 1)
        $result .=  $prefix . ' negali būti skaičius!'.'<br>';
    
    return $result;
}

function personalNumValidation($data) 
{
  $result = null;

  if(!is_numeric($data))
  $result .=  'Asmens kodas turi būti skaičius!'.'<br>';

  if(strlen($data) != 11)
    $result .= 'Asmens kodas turi būti 11 skaičių!'.'<br>';

  return $result;
}

// asmens kodui validuoti
function numbers_only($value)
{
  return ctype_digit(strval($value));
} 