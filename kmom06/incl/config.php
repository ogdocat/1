<?php
// turn on all error reporting
error_reporting(-1);

// start a named session
session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

$pageTimeGeneration = microtime(true); 

// include common functions and login /logout
include_once(dirname(__FILE__) . "/../src/common.php");
include_once(dirname(__FILE__) . "/../src/login.php");

// account and password that can login
$userAccount = "doe";
$userPassword = userPassword("doe");