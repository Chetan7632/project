<html>
 <body>
  <form methed="POST" action="Addition.php">
  Enter No1:
   <input type="number" name="t1"><br>
  Enter No2:
   <input type="number" name="t2"><br>
  <input type="submit" value="Addition">
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $c=$a+$b;
  echo("Addition".$c);
?>