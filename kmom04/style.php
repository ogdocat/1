<?php
include("incl/config.php");
$title = "Style";
$pageId = "style";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
  $p = $_GET["p"];
}


// Is the page known?
$path = "incl/style";
$file = null;
switch($p)
{
  case "choose-stylesheet":
    $pageTitle   = "Välj Stylesheet";
    $file        = "choose_stylesheet.php";
    break;

  case "choose-stylesheet-process":
    include("$path/choose_stylesheet_process.php");
    break;

  default:
    $pageTitle   = "Välj style för webbplatsen.";
    $file        = "default.php";
}
?>

<?php include("incl/header.php"); ?>
<div id="content">
  <aside class="left" style="width:22%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article class="right border justify-para" style="width:72%;">
    <p class="quiet small">Källkod till denna sida, <code><?php echo "$path/$file"; ?></code>, <a href="viewsource.php?dir=<?php echo $path; ?>&amp;file=<?php echo $file; ?>#file">hittar du här</a>.</p>
    <?php include("$path/$file"); ?>
    <?php include("incl/byline.php"); ?>
    <hr>
  </article>
</div>
<?php include("incl/footer.php"); ?>
