<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "autoload.php";

$div = new Tag('div');
$div->setAttribute('class','container');
$div->appendBody("TEST");

$body = $div->body();
$body->append(" SSS");
echo $div;