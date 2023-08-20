<html>
 <body>
  <form method="post" action="ass2_setC1.php">
   Enter No:
     <input type="text" name="t1"><br>
    <input type="submit" value="OK">
  </form>
 </body>
</html>
<?php
 $n=$_POST["t1"];
 $r=0;
 while((int)$n>0)
 {
   $d=$n%10;
   $n=(int)$n/10;
   $r=($r*10)+$d;
 }
 while((int)$r>0)
 {
   $d=$r%10;
   $r=(int)$r/10;
   switch($d)
   {
     case 0:print("zero");
            break;
     case 1:print("one");
            break;
     case 2:print("<br>two");
            break;
     case 3:print("<br>three");
            break;
     case 4:print("<br>four");
            break;
     case 5:print("<br>five");
            break;
     case 6:print("<br>six");
            break;
     case 7:print("<br>seven");
            break;
     case 8:print("<br>eight");
            break;
     case 9:print("<br>nine");
            break;
   }
 }
?>