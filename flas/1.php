<!DOCTYPE html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  <title>php20</title>
<style>
th {background-color:#999; color:#eee}
td {border: 1px solid;}
</style>

</head>
<body>

<?php
error_reporting(-1);

$a = array(
  array("MegaMic", "Derbi DRD Senda", 15),
  array("Mumintrollet", "Vespa", 12),
  array("Lilla My", "Harley Davidsson", 17),
);

$html = "<table><tr><th>Vem</th><th>Vad</th><th>Ålder</th></tr>";
foreach($a as $key => $val) {
  $html .= "<tr><td>$val[0]</td><td>$val[1]</td><td>$val[2]</td></tr>";
}
$html .= "</table>";

echo $html;
?>

</body>
</html>