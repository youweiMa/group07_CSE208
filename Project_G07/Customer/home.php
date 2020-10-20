<?php
//Author: Tianhe.Du
// function of letting registered users enter this page
homepage();
function homepage() {
 require_once('bookmark.php');
 session_start();
 check_valid_user();
 
 display_html_header('G07 Laundry Expert | Home');
 display_navbar();
 display_homepage();
 display_html_footer();
}
?>
