<?php 
include("incl/config.php");
$title = "Min Me-sida";
$pageId = "me";

//
// Change the style depending on the $_GET
//
$pageStyle = null;
if(isset($_GET['border-radius'])) {
  $pageStyle .= '
figure { 
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 border-radius: 30px;
 border-color:#5C0A0A;
}
';
}
if(isset($_GET['box-shadow'])) {
  $pageStyle .= '
figure { 
 -moz-box-shadow: 10px 10px 5px #8A0F0F;
 -webkit-box-shadow: 10px 10px 5px #8A0F0F;
 box-shadow: 10px 10px 5px #8A0F0F;
}
';
}
if(isset($_GET['gradient'])) {
  $pageStyle .= '
body { 
 background: -webkit-gradient(linear, left top, left bottom,     color-stop(0.0, red), color-stop(0.30, brown), color-stop(0.80, pink)); 
 background: -moz-linear-gradient(top,  blue,  green 10%, #FFF 80%);
}
';
}
if(isset($_GET['opaque'])) {
  $pageStyle .= '
header#top  { background:hsla(0,0%,100%,0.20); }
div#content { background:hsla(0,0%,100%,0.80); }
header#top, div#content { padding:1em; }

header#top {
 -webkit-border-top-left-radius: 10px;
 -moz-border-radius-topleft: 10px;
 border-top-left-radius: 10px;
 -webkit-border-top-right-radius: 10px;
 -moz-border-radius-topright: 10px;
 border-top-right-radius: 10px;
}

div#content { 
 -webkit-border-bottom-left-radius: 10px;
 -moz-border-radius-bottomleft: 10px;
 border-top-bottom-radius: 10px;
 -webkit-border-bottom-right-radius: 10px;
 -moz-border-radius-bottomright: 10px;
 border-bottom-right-radius: 10px;
 margin-top:0.2em; 
 margin-bottom:1em; 
}

';
}

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