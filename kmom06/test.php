<?php
include("incl/config.php");
$pageId = "test";
$pageStyle = null;

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
  $p = $_GET["p"];
}

// Better with switch?
$path = "incl/test";
$file = null;
if($p == "kmom02-pagestyle")
{
 $title   = "Variera CSS med: \$pageStyle";
  $file        = "kmom02_pagestyle.php";
}
else if ($p == "kmom03-get")
{
  $title   = "Visa \$_GET";
  $file        = "kmom03_get.php";
}
else if ($p == "kmom03-getform")
{
  $title   = "Form med get";
  $file        = "kmom03_getform.php";
}
else if ($p == "kmom03-postform")
{
  $title   = "Form med post";
  $file        = "kmom03_postform.php";
}
else if ($p == "kmom03-validate")
{
  $title   = "Validera inkommande";
  $file        = "kmom03_validate.php";
}
else if ($p == "kmom03-server")
{
  $title   = "Visa \$_SERVER";
  $file        = "kmom03_server.php";
}
else if ($p == "kmom03-sessiondestroy")
{
  $title   = "Förstör sessionen";
  $file        = "kmom03_sessiondestroy.php";
  destroySession();
}
else if ($p == "kmom03-session")
{
  $title   = "Visa \$_SESSION";
  $file        = "kmom03_session.php";
}
else if ($p == "kmom03-sessionchange")
{
  $title   = "Ändra värden i sessionen";
  $file        = "kmom03_sessionchange.php";
}
else if ($p == "kmom03-sessioninfo")
{
  $title   = "Information om sessionen";
  $file        = "kmom03_sessioninfo.php";
}
else if ($p == "kmom03-create-password")
{
  $title   = "Kryptera lösenordet";
  $file        = "kmom03_create_password.php";
}
else
{
  $title   = "Tester";
  $file        = "default.php";
}
?>

<?php include 'incl/header.php'; ?>

<div id="content">
  <aside class="left" style="width:14%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article class="right justify-para" style="width:80%;">
    <?php include("$path/$file"); ?>
    <p class="quiet small">Källkod till detta testfall, <code><?php echo "$path/$file"; ?></code>,
    <a href="viewsource.php?dir=<?php echo $path; ?>&amp;file=<?php echo $file; ?>#file">hittar du här</a>.</p>
  </article>
</div>
<?php include("incl/footer.php"); ?>
