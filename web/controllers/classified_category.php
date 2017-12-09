<?php
require_once("/models/category.php");
require_once("/models/classified.php");

$_category=new Category();
$_classified=new Classified();

// select category
$category=$_category->select($_GET['id']);
$classifieds=$_classified->list($category['id']);

require_once("/views/category.html");
?>