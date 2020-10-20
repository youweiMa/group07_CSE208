<?php
//Author:Youwei.Ma, Tianhe.Du
require_once('bookmark.php');

$ordID=$_POST['ordID'];

$con=mysql_connect("localhost","group07","password");
if(!$con){
	die("connect fail");
	}
$valid_user = $_SESSION['valid_user'];
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
$endTime=$row['endTime'];
$status=$row['status'];
$mark=$row['mark'];
$comment=$row['comment'];

display_html_header('Order details');
display_problem_page_top();
display_p_order($ordID,$startTime,$endTime,$username,$cusPhone,$area,$address,$clothName,$price,$status,$mark,$comment);
display_problem_page_bottom();
display_html_footer();
?>
