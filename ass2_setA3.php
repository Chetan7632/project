<html>
 <body>
  <form method="post" action="ass2_setA3.php">
   Enter Percentage:
    <input type="text" name="t1"><br>
   <input type="submit" value="Addition">
  </form>
 </body>
</html>
<?php
 $p=$_POST["t1"];
 if($p>=70)
  print("Grade=First Class With Distintion");
 elseif($p>=60)
  print("Grade=First Class");
 elseif($p>=50)
  print("Grade=Higher Second Class");
 elseif($p>=40)
  print("Grade=Pass Class");
 else
  print("Grade=Fial");
?>