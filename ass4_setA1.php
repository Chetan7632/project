<?php
 power(4,7);

 function power($x,$y)
 {
   $a=1;
   while($y>0)
   {
     $a=$a*$x;
     $y--;
   }
   echo("<br> Base to Power=".$a);
 }
?>