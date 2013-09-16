<?php
include("incl/config.php");
$title = "GET";
$pageId = null;
$pageStyle = null;
?>

<?php include 'incl/header.php'; ?>
<div id="content">

<h1>Visa innehållet i <code>$_GET</code></h1>

<p>Du anropade sidan med följande querystring:
<code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code></p>

<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>
</div>
<?php include 'incl/footer.php'; ?>