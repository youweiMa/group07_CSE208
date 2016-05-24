<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
require_once ('bookmark.php');
session_start();

$oldpwd = $_POST['oldpwd'];
$newpwd = $_POST['newpwd'];
$newpwd2 = $_POST['newpwd2'];

try{
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('You have not filled the form out correctly. Please go back and try again.');
    }
    if ($newpwd != $newpwd2) {
      throw new Exception('The passwords you entered do not match. Please go back and try again.');
    }
    if ((strlen($newpwd) < 6) || (strlen($newpwd) > 15)) {
      throw new Exception('Your password must be between 6 and 15 characters. Please go back and try again.');
    }
    
    change_password($_SESSION['valid_user'], $oldpwd, $newpwd);
    display_html_header('Change password');
    display_success_page_top();
    echo 'Password changed succesfully!';
    display_success_page_bottom();
    exit;
    
} catch (Exception $e) {
     display_html_header('Problem');
     display_problem_page_top();
     echo $e->getMessage();
     display_problem_page_bottom();
}
?>
