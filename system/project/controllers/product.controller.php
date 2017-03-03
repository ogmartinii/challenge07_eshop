<?php
$product_id = request::get('id');

$img_file = Image_Model::getImgName($product_id);

$product = new View('product/product');
$product->product = Product_Model::retrieveById($product_id);
$product->img_file = $img_file;
$product->cart = Order_Model::addToCart();



//$img = Product_Model::getImgName($product_id);


$page_layout = new View('product/page_layout');

$page_layout->product = $product;

presenter::setTitle('Products');
presenter::present($page_layout);