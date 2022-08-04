<?php
//Get the http or https and add a host example: localhost
$Host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
//dirname($_SERVER['PHP_SELF']) show your directory where the file located
$URL = $Host . dirname($_SERVER['PHP_SELF']);
//explode the "/" in your directory
$CurrentDIR = explode("/", dirname($_SERVER['PHP_SELF']));
$CurrentDIR = $CurrentDIR[count($CurrentDIR)-1];
//explode the "/" in your parameter example folder
$Parameter = explode($CurrentDIR."/", dirname($_SERVER['REQUEST_URI']));
$Parameter = strtolower($Parameter[count($Parameter)-1]);

?>