<?php
 $a=array(24,37,48,75);
 $b=array(24,37,48,55);
 $c=array_merge($a,$b);
 $c=array_unique($c);
 echo("Union Array=");
 print_r($c);
 shuffle($a);
 echo("<br> Array Number Access Randomly=");
 print_r($a);
?>