<?php 
include("incl/config.php");
$title = "Min Me-sida om mig själv";
$pageId = "me";
$pageStyle = '
html { background: #FB4664; } 
body { background: #FDD; }
a,p,h1,h2,h3,h4 { color: #781802; }
';
?>

<?php include 'incl/header.php'; ?>

<div id="content">
  <h1>htmlphp-me</h1>
  
  <figure class="right top">
    <img class="superroundedcorner" src="img/me.jpg" height="120">
    <figcaption>
      <p>Bild på mig och<br>
      vän i Marseille.</p>
    </figcaption>
  </figure>

  <h3>Presentation med php.org-look</h3>
  <p>
  	Hej! Mitt namn är Nils Boldt-Christmas.<br>
  	Jag bor tillsammans med min fru på södermalm i Stockholm, (icke hon på bilden),<br>
  	och om någon vecka även med en bebis.</p>
  <p>
  	Sedan några år är jag tillbakaflyttad till Stockholm från Paris, där jag bodde 12 år<br>
  	och arbetade som fotograf.</p>
  <p>
  	Jag har sedan 90-talet, vid sidan av mitt arbete, utvecklat flash sidor som extraknäck, och byter nu till HTML5 tekniker och apputveckling för Android och iOS.</p>
  <p> 
	Jag hoppas känna starkt självförtroende som webbutvecklare efter dessa kursers slut.</p>
  <p>
  	Hör gärna av dig om du vill ses och prata programmering, barn eller appidéer. <span style="float:right; padding-right: 16px;">// Nils </span></p>

  <?php include("incl/byline.php"); ?>

</div>

<?php include 'incl/footer.php'; ?>

