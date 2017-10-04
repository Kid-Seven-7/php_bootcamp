#!/usr/bin/php
<?php
$str = implode(" ", $argv);
$str = explode(" ", $str);
unset($str[0]);
sort($str);
foreach($str as $arr_str)
	echo("$arr_str\n");
?>
