<?php
date_default_timezone_set('Asia/Kolkata');

// Set the Path of the root directory
define('PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

$url = isset($_SERVER['REDIRECT_URL']) ? trim($_SERVER['REDIRECT_URL'], "/") : trim($_SERVER['REQUEST_URI'], "/");

if (strpos($url, "hi") === 0) {
	define("LANG", "HINDI");
	$name = str_replace("hi/", "", $url);
	$name = str_replace("/", "", $name);
	$name = empty($name) ? "Someone" : $name;
	require PATH . "/hindi.php";
} else {
	define("LANG", "ENGLISH");
	$name = empty($url) ? "Someone" : $url;
	require PATH . "/english.php";
}

function base_url($path = "", $local = false) {
	$locale = [
		"ENGLISH" => "",
		"HINDI" => "hi/"
	];
	$lpath = ($local == TRUE && isset($locale[LANG])) ? $locale[LANG] : "";
	return sprintf(
		"%s://%s%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		"/" . $lpath . $path
	);
}
