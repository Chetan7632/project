<?php
 function swap(&$a,&$b)
 {
   $t=$a;
   $a=$b;
   $b=$t;
   echo("<br> Swap value of a=".$a);
   echo("<br> Swap value of b=".$b);
 }
$a=15;
$b=25;
echo("<br> Before swap a=".$a);
echo("<br> Before swap b=".$b);
swap($a,$b);
echo("<br> After swap a=".$a);
echo("<br> After swap a=".$b);

?>