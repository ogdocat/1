<?php
include("incl/config.php");
$title = "Testsidan";
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
 $pageTitle   = "Tester kmom02: Visa olika styles med \$pageStyle";
  $file        = "kmom02_pagestyle.php";
}
else if ($p == "kmom03-get")
{
  $pageTitle   = "Tester kmom03: Visa \$_GET";
  $file        = "kmom03_get.php";
}
else if ($p == "kmom03-getform")
{
  $pageTitle   = "Tester kmom03: Form med get";
  $file        = "kmom03_getform.php";
}
else if ($p == "kmom03-postform")
{
  $pageTitle   = "Tester kmom03: Form med post";
  $file        = "kmom03_postform.php";
}
else if ($p == "kmom03-validate")
{
  $pageTitle   = "Tester kmom03: Validera inkommande";
  $file        = "kmom03_validate.php";
}
else if ($p == "kmom03-server")
{
  $pageTitle   = "Tester kmom03: Visa \$_SERVER";
  $file        = "kmom03_server.php";
}
else if ($p == "kmom03-sessiondestroy")
{
  $pageTitle   = "Tester kmom03: Förstör sessionen";
  $file        = "kmom03_sessiondestroy.php";
  destroySession();
}
else if ($p == "kmom03-session")
{
  $pageTitle   = "Tester kmom03: Visa \$_SESSION";
  $file        = "kmom03_session.php";
}
else if ($p == "kmom03-sessionchange")
{
  $pageTitle   = "Tester kmom03: Ändra värden i sessionen";
  $file        = "kmom03_sessionchange.php";
}
else if ($p == "kmom03-sessioninfo")
{
  $pageTitle   = "Tester kmom03: Information om sessionen";
  $file        = "kmom03_sessioninfo.php";
}
else if ($p == "kmom03-create-password")
{
  $pageTitle   = "Tester kmom03: Kryptera lösenordet";
  $file        = "kmom03_create_password.php";
}
else
{
  $pageTitle   = "Tester";
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
