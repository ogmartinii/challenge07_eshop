<?php

$cart = new View('cart/cart');
$cart->cart = Order_Model::getCart();

$page_layout = new View('cart/page_layout');
$page_layout->cart = $cart;

presenter::setTitle('Cart');

presenter::present($page_layout);