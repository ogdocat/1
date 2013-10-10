<!DOCTYPE html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  <title>php20</title>
<style>
.form {
  font-family:tahoma, verdana, arial;
}
.form fieldset{
  width: 20em;
  border-color:black;
}
.form legend{
  border-bottom:0px;
  border-top:0px;
  border-style:double;
  text-transform:uppercase;
}
.form label{
  width:20em;
  display:block;
  float:left;
}
.form input, select{
  float:right;
  width:15em;
}
.form input[type=submit] {
  margin-top:.5em;
  border:.1em solid black;
  font-family:tahoma, verdana, arial;
  clear:both;
}
</style>

</head>
<body>

<form class=form method=post>
  <fieldset>
    <legend>legend</legend>
    <label>text: <input name=user type=text></label>
    <label>password: <input name=password type=password></label>
    <label>select: 
      <select name=selectsome>
        <option>ett</option>
        <option>två</option>
        <option>tre</option>
      </select>
    </label>
    <input type=submit name=doIt>
  </fieldset>
</form>


<?php
error_reporting(-1);

if(isset($_POST['doIt'])) {
  echo "<pre>", print_r($_POST, true), "</pre>";
} else {
  echo "<p>Press submit</p>";
}


?>

</body>
</html>