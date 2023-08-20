<?php
 
 factorial(7);

 function factorial($n)
 {
   $f=1;
   for($i=1;$i<=$n;$i++)
    $f=$f*$i;

   echo("<br> Factorial=".$f);
 }
?>