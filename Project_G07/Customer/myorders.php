<?php
//Author:Tianhe.Du
// function of letting registered users enter this page
myorderspage();
function myorderspage() {
 require_once('bookmark.php');
 session_start();

 
 display_html_header('G07 Laundry Expert | My Orders'); 
 check_valid_user();
 display_navbar();
 display_myorder();
 display_html_footer();
}
?>
