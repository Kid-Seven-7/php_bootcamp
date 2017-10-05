#!/usr/bin/php
<?php
$str = $argv[1];
$str = trim(str_replace('\t', ' ', $str));
$str = preg_split("/[\s]+/", $str);
$max = count($str);
for ($i=0; $i < $max; $i++) {
	if ($i == $max - 1) {
		echo "$str[$i]";
	} else {
		echo "$str[$i] ";
	}
}
?>
