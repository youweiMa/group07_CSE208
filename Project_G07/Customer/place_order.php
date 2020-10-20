<?php
//Author: Youwei.Ma, Tianhe.Du
require_once('bookmark.php');
  session_start();
  
  $username = $_SESSION['valid_user'];
  $cusPhone=$_POST['cusPhone'];
  $area=$_POST['area'];
  $address=$_POST['address'];
  $clothName=$_POST['clothName'];
  $price=$_POST['price'];
  $startTime=$_POST['startTime'];
  $status=$_POST['status'];
  
  try   {
    // check forms filled in
    if (!filled_out($_POST)) {
      throw new Exception('Please go back and fill out the form.');
    }
    if ((strlen($cusPhone) > 11)) {
      throw new Exception('Your phone number is not valid, please go back and try again.');
    }

    makeorder($username, $cusPhone, $area, $address, $clothName, $price, $startTime, $status);
    
    display_html_header('Successful');
    display_success_page_top();
    echo 'Your order is successfully placed!';
    display_afterplace_page_bottom();
    exit;
  }
  catch (Exception $e) {
     display_html_header('Problem');
     display_problem_page_top();
     echo $e->getMessage();
     display_problem_page_bottom();
     exit;
  }
?>