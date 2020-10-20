<?php
//Author:Youwei.Ma
require_once('bookmark.php');

$clothName=$_GET['clothName'];
$price=$_GET['price'];

display_html_header('Order information');
order_form($clothName, $price);
display_html_footer();
?>
