<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
// this page is for internal members, no unregistered customer can see it
require_once('bookmark.php');

session_start();

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
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
check_valid_user();

display_html_header('G07 Laundry Expert | Wash');
display_navbar();
display_wash();
display_html_footer();
?>
