<html>
 <body>
  <form methed="post" action="Substraction.php">
  Enter No1:
   <input type="text" name="t1"><br>
  Enter No2:
   <input type="text" name="t2"><br>
  <input type="submit" value="Substraction">
  </form>
 </body>
</html>

<?php
 $a=$_post["t1"];
 $b=$_post["t2"];
 $c=$a-$b;
  echo("Substraction".$c);
?>