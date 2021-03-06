<?php

/**
 * Project: Growing Logic
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */

require_once('common.php');
require_once(CONTROLLER . 'database.php');
require_once(CONTROLLER . 'functions.php');


$uri = $_SERVER['REQUEST_URI'];

$tmp = BASE;
if(!empty($tmp))
	$uri = str_replace('growing_logic/', '', $uri);
else
	$uri = str_replace_first('/', '', $uri);

$page = strtolower($uri);

$content = '';

if($uri != '/')
	$content = require_once(PAGES . $uri . '.php');
	echo $uri;

// template
$template_path = 'template/';
require($template_path . 'template.php');

?>

