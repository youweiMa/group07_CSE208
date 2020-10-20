<?php
//Reference: PHP and MySQL Web Development, author Welling & Thomson
require_once('db_connect.php');

function register($username, $email, $password, $SQ1, $AW1) {
// register new person with db
// return true or error message

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from user where username='".$username."'");
  if (!$result) {
    throw new Exception('Could not execute query');
  }

  if ($result->num_rows>0) {
    throw new Exception('That username is taken - go back and choose another one.');
  }

  // if ok, put in db
  $result = $conn->query("insert into user values
                         ( '".$username."', sha1('".$password."'), '".$email."', '".$SQ1."', '".$AW1."')"
                        );
  if (!$result) {
    throw new Exception('Could not register you in database - please try again later.');
  }

  return true;
}

function login($username, $password) {
// check username and password with db
// if yes, return true
// else throw exception

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from user
                         where username='".$username."'
                         and passwd = sha1('".$password."')");
  if (!$result) {
     throw new Exception('Could not log you in.');
  }

  if ($result->num_rows>0) {
     return true;
  } else {
     throw new Exception('Could not log you in.');
  }
}

function check_valid_user() {
// see if somebody is logged in and notify them if not
  if (!isset($_SESSION['valid_user']))  {
     // they are not logged in
     display_html_header('Problem');
     display_success_page_top();
     echo 'You are not logged in.';
     display_success_page_bottom();
     exit;
  }
}

function change_password($username, $oldpwd, $newpwd) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else throw an exception
  login($username, $oldpwd);
  $conn = db_connect();
  $result = $conn->query("update user
                          set passwd = sha1('".$newpwd."')
                          where username = '".$username."'");
  if (!$result) {
    throw new Exception('Password could not be changed.');
  } else {
    return true;  // changed successfully
  }
}

function reset_password($username) {
// set password for username to a random value
// return the new password or false on failure

  // add a number  between 0 and 999999 to it
  $rand_number = rand(0, 999999);
  $new_password = $rand_number;

  // set user's password to this in database or return false
  $conn = db_connect();
  $result = $conn->query("update user
                          set passwd = sha1('".$new_password."')
                          where username = '".$username."'");
  if (!$result) {
    throw new Exception('Could not change password.');  // not changed
  } else {
    return $new_password;  // changed successfully
  }
}
?>
