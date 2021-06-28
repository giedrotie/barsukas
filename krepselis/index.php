<?php

require __DIR__ . '/Cart.php';
echo '<pre>';


// $cart1 = new Cart;
// $cart2 = new Cart;

$cart1 = Cart::getCart();
$cart2 = Cart::getCart();

var_dump($cart1);
echo '<br>';
var_dump($cart2);