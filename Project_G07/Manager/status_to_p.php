<?php
/Author:Youwei.Ma
require_once('bookmark.php');

$ordID=$_POST['ordID'];

$con=mysql_connect("localhost","group07","password");
if(!$con){
	die("connect fail");
	}
mysql_select_db("db_le",$con);
mysql_query("UPDATE tb_order SET status='picking up' WHERE ordID='$ordID'");

display_html_header('Success');
display_problem_page_top();
echo "You change the status to picking up!";
display_problem_page_bottom();
display_html_footer();
?>
