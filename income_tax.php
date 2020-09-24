<?php
include 'includes/cons.php';
$title="Income Tax";
$content=getIncomeTaxContent();
echo getNavigationPages($title,$content) ;
?>
