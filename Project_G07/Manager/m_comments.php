<?php
Author:Xing.Heng
require_once('bookmark.php');
session_start();
check_valid_man();
display_html_header('G07 Laundry Expert | Comments');
display_navbar();
display_comments();
display_html_footer();
?>

