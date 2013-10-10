<?php
error_reporting(-1);
session_start();

$_SESSION['x'] = 0;
$_SESSION['y'] = 0;

if(isset($_GET['redirect'])) {
  header("Location: http://www.student.bth.se/~dasp11/htmlphp/me5/form.php");
}

echo "<pre>", print_r($_SESSION, true), "</pre>";

?>

<p>Go to first question: <a href="http://www.student.bth.se/~dasp11/htmlphp/me5/form.php">
START HERE as link</a></p>

<p><a href="?redirect">Same as above but as redirect using header</a>.</p> 