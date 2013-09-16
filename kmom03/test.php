<?php
include("incl/config.php");
$pageId = "test_minimal";


// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
  $p = $_GET["p"];
}


// Is the page known?
$path = "incl/test";
$file = null;
if($p == "kmom02-pagestyle")
{
  $pageTitle   = "Tester kmom02: Visa olika styles med \$pageStyle";
  $file        = "kmom02_pagestyle.php";
}
else if ($p == "kmom03-get")
{
  $pageTitle   = "Tester kmom03: Visa \$_GET";
  $file        = "kmom03_get.php";
}
else
{
  $pageTitle   = "Tester";
  $file        = "default_minimal.php";
}
?>

<?php include("incl/header.php"); ?>
<div id="content">
  <aside class="left" style="width:22%;">
    <?php include("$path/aside_minimal.php"); ?>
  </aside>
  <article class="right border justify-para" style="width:72%;">
    <p class="quiet small">Källkod till detta testfall, <code><?php echo "$path/$file"; ?></code>, <a href="viewsource.php?dir=<?php echo $path; ?>&amp;file=<?php echo $file; ?>#file">hittar du här</a>.</p>
    <?php include("$path/$file"); ?>
    <?php include("incl/byline.php"); ?>
    <hr>
  </article>
</div>
<?php include("incl/footer.php"); ?>
