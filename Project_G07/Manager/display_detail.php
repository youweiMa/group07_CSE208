<?php
//Author:Youwei.Ma
require_once('bookmark.php');

$ordID=$_POST['ordID'];

$con=mysql_connect("localhost","group07","password");
if(!$con){
	die("connect fail");
	}
$valid_man = $_SESSION['valid_man'];
mysql_select_db("db_le",$con);
$list=mysql_query("select * from tb_order where ordID='$ordID'");
$row=mysql_fetch_array($list);

$username=$row['username'];
$cusPhone=$row['cusPhone'];
$area=$row['area'];
$address=$row['address'];
$clothName=$row['clothName'];
$price=$row['price'];
$startTime=$row['startTime'];
$status=$row['status'];

display_html_header('Order details');
display_problem_page_top();
display_c_order($ordID,$startTime,$username,$cusPhone,$area,$address,$clothName,$price,$status);
display_problem_page_bottom();
display_html_footer();
?>

