<?php
// Core file holds pagination variables
include_once 'config/core.php';
  
// To include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
  
// To include database and product object
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
$category = new Category($db);
  
// Get search term
$search_term = isset($_GET['s']) ? $_GET['s'] : '';
  
$page_title = "You searched for \"{$search_term}\"";
include_once "layout_header.php";
  
// query products
$stmt = $product->search($search_term, $from_record_num, $per_page);
  
// specify the page where paging is used
$page_url="search.php?s={$search_term}&";
  
// count total rows - used for pagination
$total_rows=$product->countAll_BySearch($search_term);
  
// Read_template file controls how the product list will be rendered
include_once "read_template.php";
  
// layout_footer.php holds our javascript and closing html tags
include_once "layout_footer.php";
?>