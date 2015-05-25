<?php
$h='localhost';
$u='root';
$p='';
$db='gpm_briket_db';

$con=mysql_connect($h,$u,$p) or die('con error');
mysql_select_db($db,$con) or die('db error');
?>