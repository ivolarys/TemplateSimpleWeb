<?php
error_reporting(E_ALL);
//error_reporting(0);

$host=$_SERVER['HTTP_HOST'];

//$P=split("/", $_SERVER['SCRIPT_URL']);
$P=split("/", $_SERVER['REQUEST_URI']);


if (!$P[1]) {
	$f="site/pages/".$P[1]."/home.php";
} else {
	$f="site/pages/".$P[1]."/$P[2].php";
}

if ( file_exists($f) ) {
	include $f;
} else {
	include "site/pages/".$P[1]."/404.php";
}

?>

