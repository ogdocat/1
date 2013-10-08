<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>

  <!-- links to external stylesheets -->
  <?php if(isset($_SESSION['stylesheet'])): ?>
    <link rel="stylesheet" href="style/<?php echo $_SESSION['stylesheet']; ?>">
  <?php else: ?>
    <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
    <link rel="alternate stylesheet" href="style/grey.css" title="gray stylesheet">
  <?php endif; ?>

  <!-- favico -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- Each page can set $pageStyle to create an internal stylesheet -->
  <?php if(isset($pageStyle)) : ?>
  <style type="text/css">
    <?php echo $pageStyle; ?>
  </style>
  <?php endif; ?>

  <!-- Each page can set $pageStyle to create an internal stylesheet -->
  <?php if(isset($pageStyle)) : ?>
  <style type="text/css">
    <?php echo $pageStyle; ?>
  </style>
  <?php endif; ?>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>class="superroundedcorner">

<!-- Above header -->
<header id="above">

  <?php echo userLoginMenu(); ?>

  <!-- Relateted links -->
  <nav class="related">
    <a href="../kmom01/me.php">kmom01</a>
    <a href="../kmom02/me.php">kmom02</a>
    <a href="../kmom03/me.php">kmom03</a>
    kmom04
  </nav>
</header>

<!-- Header with logo and main navigation -->
<header id="top">
  <a href="me.php"><img src="img/php.png" alt="htmlphp logo" height=50></a>

  <!-- Main navigation menu -->
  <nav class="navmenu roundedcorner">
    <a id="me-"     href="me.php">Me</a>
    <a id="report-" href="report.php">Redovisning</a>
    <a id="test-"   href="test.php">Testsida</a>
    <a id="style-"   href="style.php">Styles</a>
    <a id="source-" href="viewsource.php">Källkod</a>
  </nav>
</header>
