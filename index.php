<?php
//Get the http or https and add a host example: localhost
$Host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
//dirname($_SERVER['PHP_SELF']) show your directory where the file located
$URL = $Host . dirname($_SERVER['PHP_SELF']);

?>