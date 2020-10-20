<?php
  //Reference: PHP and MySQL Web Development, author Welling & Thomson
  // validate the input data and store them into db
  require_once('bookmark.php');

  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  $SQ1=$_POST['SQ1'];
  $AW1=$_POST['AW1'];
  
  // start session must go before headers
  session_start();
  try   {
    // check forms filled in
    if (!filled_out($_POST)) {
      throw new Exception('You have not filled the form out correctly. Please go back and try again.');
    }

    // email address not valid
    if (!valid_email($email)) {
      throw new Exception('The email address is not valid. Please go back and try again.');
    }

    // passwords not the same
    if ($passwd != $passwd2) {
      throw new Exception('The passwords you entered do not match. Please go back and try again.');
    }

    // check password length
    if ((strlen($passwd) < 6) || (strlen($passwd) > 15)) {
      throw new Exception('Your password must be between 6 and 15 characters. Please go back and try again.');
    }

    // attempt to register
    register($username, $email, $passwd, $SQ1, $AW1);
    // register session variable
    $_SESSION['valid_user'] = $username;

    // provide link to members page
    display_html_header('Registration successful');
    display_success_page_top();
    echo 'Your registration is successful.  Go to login to start washing!';
    display_success_page_bottom();
    exit;
  }
  //catch the exception and provide messages
  catch (Exception $e) {
     display_html_header('Problem');
     display_problem_page_top();
     echo $e->getMessage();
     display_problem_page_bottom();
     exit;
  }
?>
