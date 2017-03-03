<?php

// gets product id

$product_id = request::get('id');


// products showcase
$showcase = new view('products/showcase');
$showcase->showcase = Product_Model::getTop3Products();

$category_list = Category_Model::getTopCategories();

$catalogue = Product_Model::getAllProducts();

$img_id = Image_Model::getImgName($product_id);


// categories
$categories = new view('products/categories');
$categories->category_list = $category_list;

// all products

$all_products = new view('products/allproducts');
$all_products->catalogue = $catalogue;
$all_products->img_id = $img_id;




// page layout
$page_layout = new view('products/page_layout');
$page_layout->showcase = $showcase;
$page_layout->categories = $categories;
$page_layout->all_products = $all_products;

presenter::setTitle('Products');
presenter::present($page_layout);