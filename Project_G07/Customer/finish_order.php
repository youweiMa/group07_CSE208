<?php
//Author:Youwei.Ma
require_once('bookmark.php');

$ordID=$_POST['ordID'];

display_html_header('Give a comment');
mark_comment($ordID);
display_html_footer();
?>
