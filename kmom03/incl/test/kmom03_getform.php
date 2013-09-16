<?php
include("incl/config.php");
$title = "GETFORM";
$pageId = null;
$pageStyle = null;
?>

<?php include 'incl/header.php'; ?>
<div id="content">

<h1>Formulär och get-metoden</h1>
 <form method="get" action="?">
  <fieldset>
   <legend>Exempel på formulär med get-metoden</legend>
   <p>
    <label for="input1">Användarkonto:</label><br>
    <input id="input1" class="text" type="text" name="account">
   </p>
   <p>
    <label for="input2">Lösenord:</label><br>
    <input id="input2" class="text" type="password" name="password">
   </p>
   <p>
    <input type="submit" name="doLogin" value="Login">
  </p>
 </fieldset>
</form>

<h2>Visa innehållet i <code>$_GET</code></h2>

<p>Du anropade sidan med följande querystring:
<code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code></p>

<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>
</div>

<?php include 'incl/footer.php'; ?>