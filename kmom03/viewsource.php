<?php
include("incl/config.php");
$title = "Källkoden";
$pageTitle = "Visa källkod";
$pageId = "source";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>

<?php include("incl/header.php"); ?>
<div id="content">
<article>
<?php echo "$sourceBody"; ?>
<hr>
</article></div>
<?php include("incl/footer.php"); ?>

