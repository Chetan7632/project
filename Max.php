<html>
 <body>
  <form method="post" action="Max.php">
  Enter No1:
   <input type="text" name="t1"><br>
  Enter No2:
   <input type="text" name="t2"><br>
  <input type="submit" value="MAX">
  </form>
 </body>
</html>
<?php
$a=$_post["t1"];
$b=$_post["t2"];
echo("Maximum no=");						 
echo("$a>=$b?$a:$b");
?>

