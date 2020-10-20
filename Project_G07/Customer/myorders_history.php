<?php
//Author:Tianhe.Du
// function of letting registered users enter this page
myordershistorypage();
function myordershistorypage() {
 require_once('bookmark.php');
 session_start();
 check_valid_user();
 
 display_html_header('G07 Laundry Expert | Wash');
 display_navbar();
 display_myorder_history();
 display_html_footer();
}
?>
