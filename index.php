<?php

$name = trim( explode( '?', $_SERVER['REQUEST_URI'], 2 )[0], '/' );
$name = str_replace( array('.'), '', $name );
$file = '404';

if ( $name !== 'index' && is_file( __dir__ . "/$name.php" ) ) {
	$file = $name;
} elseif (!$name) {
	$file = 'home';
}

$dir = dirname(__FILE__);
include $dir . "/partials/header.php";
require $dir . "/$file.php";
include $dir . "/partials/footer.php";
