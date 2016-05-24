<?php
Author:Youwei.Ma,Tianhe.Du
require_once('bookmark.php');

$endTime=date("Y-m-d H:i:s");
$mark=$_POST['mark'];
$comment=$_POST['comment'];
$ordID=$_POST['ordID'];

$con=mysql_connect("localhost","group07","password");
if(!$con){
	die("connect fail");
	}
mysql_select_db("db_le",$con);
mysql_query("UPDATE tb_order SET endTime='$endTime',mark='$mark',comment='$comment',status='finished' WHERE ordID='$ordID'");

try{
    if (!filled_out($_POST)) {
      throw new Exception('You have not filled the form out correctly. Please go back and try again.');
    }
} catch (Exception $e) {
display_html_header('Problem');
     display_problem_page_top();
     echo $e->getMessage();
     display_problem_page_bottom();
     exit;
}

display_html_header('Success');
display_problem_page_top();
echo "You confirm the order!";
display_afterplace_page_bottom();
display_html_footer();
?>

