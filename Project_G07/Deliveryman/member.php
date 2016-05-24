<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
// this page is for logged in users
require_once('bookmark.php');

session_start();

//create short variable names
$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
// they have just tried logging in
  try  {
    login($username, $password);
    // if they are in the database register the user id
    $_SESSION['valid_del'] = $username;
  }
  catch(Exception $e)  {
    // unsuccessful login
    display_html_header('Problem');
    display_success_page_top();
    echo 'You could not be logged in.
          Please try again.';
    display_success_page_bottom();
    exit;
  }
}
check_valid_del();

display_html_header('G07 Laundry Expert | Order Mgmt');
display_navbar();
display_wxp();// wenxing picking up
display_html_footer();
?>

