<?php
error_reporting(-1);
session_start();

if(!isset($_SESSION['x'])) {
  $_SESSION['x'] = 0;
  $_SESSION['y'] = 0;
}

$_SESSION['x'] += 2;
$_SESSION['y'] += 1;

echo "<pre>", print_r($_SESSION, true), "</pre>"; 