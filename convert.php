<h1>Convert Temperature</h1>
<p>You will need to enter a temperature in Centigrade to be converted to Fahrenheit</p>
<?php
  if (isset($_GET['submit'])) {
    $c = $_GET['centigrade'];
    $f = (($c * 9)/5) + 32;
    echo "<p>$c C is <b>$f F</b></p>";
    }
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="centigrade"></input>
<br>
<input type="submit" value="Convert" name="submit"></input>
</form>
