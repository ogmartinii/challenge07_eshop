<?php 
$category_id = request::get('id');

$product_category_id = request::get('id');

$category = Category_Model::retrieveById($category_id);

$items = Product_Model::retrieveByCategory($product_category_id);

$info = new View('category/info');
$info->category = $category;

$categories = new View('category/categories');
$categories->items = $items;


$page_layout = new View('category/page_layout');
$page_layout->info = $info;
$page_layout->categories = $categories;

presenter::setTitle('Categories');

presenter::present($page_layout);