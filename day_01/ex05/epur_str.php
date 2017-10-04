#!/usr/bin/php
<?php
$array = preg_split("/[\s,]+/", $argv[1]);
foreach ($array as $key) {
	echo $key . " ";
}
?>
