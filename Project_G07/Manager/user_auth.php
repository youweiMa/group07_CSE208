<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
require_once('db_connect.php');

function login($username, $password) {
// check username and password with db
// if yes, return true
// else throw exception

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from admin_user
                         where username='".$username."'
                         and password = '".$password."'");
  if (!$result) {
     throw new Exception('Could not log you in.');
  }

  if ($result->num_rows>0) {
     return true;
  } else {
     throw new Exception('Could not log you in.');
  }
}

function check_valid_man() {
// see if somebody is logged in and notify them if not
  if (!isset($_SESSION['valid_man']))  {
     // they are not logged in
     display_html_header('Problem');
     display_success_page_top();
     echo 'You are not logged in.';
     display_success_page_bottom();
     exit;
  }
}

?>
