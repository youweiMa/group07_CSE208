<?php
//Author:Youwei.Ma
require_once ('bookmark.php');
session_start();
display_html_header('G07 Laundry Expert | Forget Pwd');

$user_f = $_SESSION['user_f'];
$answer = $_POST['answer'];

$con = mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
     mysql_select_db("db_le",$con);
     $result = mysql_query("select AW1 from user where username = '".$user_f."'");
     $answer_a = mysql_fetch_array($result);
     
     if($answer == $answer_a['AW1']){
        try{ 
         $pwd = reset_password($user_f);
         $display = "Your LaundryExpert password has been changed to '".$pwd."'"
              ." Please change it next time you log in.";   
         display_html_header('Success');
         display_success_page_top();
         echo $display;
         display_success_page_bottom();
        }
        catch(Exception $e){
         display_html_header('Problem');
         display_problem_page_top();
         echo $e->getMessage();
         display_success_page_bottom();
        }        
     }else{
         display_html_header('Problem');
         display_problem_page_top();
         echo 'The answer is wrong.';
         display_success_page_bottom();         
     }
     unset($_SESSION['user_f']);
     session_destroy();
     ?>