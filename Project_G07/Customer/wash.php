<?php
//Author: TIanhe.Du
// function of letting registered users enter this page
washpage();
function washpage() {
 require_once('bookmark.php');
 session_start();
 check_valid_user();
 
 display_html_header('G07 Laundry Expert | Wash');
 display_navbar();
 display_wash();
 display_html_footer();
}
?>

