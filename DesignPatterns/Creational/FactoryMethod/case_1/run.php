<?php
require_once('Product.php');
require_once('ProductFactory.php');


$product= New ProductChair('001','INGOLG chair');
var_dump($product);

$product2 = new ProductTable('0002','STOCKHOLN Table');
var_dump($product2);

// With ProductFacctory

$product3= ProductFactory::build('chair','001','INGOLG chair');
var_dump($product3);