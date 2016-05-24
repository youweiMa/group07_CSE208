<?php
//Author:Youwei.Ma
require_once ('bookmark.php');

display_html_header('G07 Laundry Expert | Forget Pwd');

$user = $_POST['user'];

checkUser($user);
function checkUser($user){
     $con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
     mysql_select_db("db_le",$con);
     $result = mysql_query("select username from user where username = '".$user."'");
     $row = mysql_num_rows($result);
     
     if($row == 1){
         session_start();
         $_SESSION['user_f'] = $user;
         display_forgetpwd_form();
         display_html_footer();
         
     }else{
         display_html_header('Problem');
         display_problem_page_top();
         echo 'The username is not exist. Please try again.';
         display_problem_page_bottom();
     }
}
  ?>


