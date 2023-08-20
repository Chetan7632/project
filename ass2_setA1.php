<html>
 <body>
  <form method="post" action="ass2_setA1.php">
   Enter Year:
    <input type="text" name="t1"><br>
   <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
 $year=$_POST["t1"];
 if($year %4==0)
 {
   echo("<br> LEAP YEAR".$year);
 }
 else
 {
   echo("<br> NOT LEAP YEAR".$year);
 }
?>
