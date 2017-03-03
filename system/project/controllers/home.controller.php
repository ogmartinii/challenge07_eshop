<?php

// list of top products
$top_products = new view('home/top_products');
$top_products->products = Product_Model::getTopProducts();

// list of categories
$categories = new view('home/categories');
$categories->categories = Category_Model::getTopCategories();

//var_dump($_SESSION);

//foreach ($_SESSION['products'] as $id)

// shop information
$info = new view('home/info');

// page layout
$page_layout = new view('home/page_layout');
$page_layout->info = $info;
$page_layout->top_products = $top_products;
$page_layout->categories = $categories;

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);
