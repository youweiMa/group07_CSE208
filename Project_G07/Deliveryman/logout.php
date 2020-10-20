<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
require_once ('bookmark.php');
session_start();
$old_user = $_SESSION['valid_del'];
// test if they were logged in
unset($_SESSION['valid_del']);
$result_dest = session_destroy();
// start output html
display_html_header('Logging Out');

if (!empty($old_user)) {
  if ($result_dest)  {
    // if they were logged in and are now logged out
    display_success_page_top();
    echo 'Logged out successfully.';
    display_success_page_bottom();

  } else {
   // they were logged in and could not be logged out
    display_problem_page_top();
    echo 'Could not log you out.';
    display_problem_page_bottom();
  }
} else {
  // if they weren't logged in but came to this page somehow
  display_problem_page_top();
  echo 'You were not logged in, and so have not been logged out.';
  display_problem_page_bottom();
}


?>

