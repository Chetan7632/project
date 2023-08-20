<?php
 $a=array(15,25,35,45);
 $b=array(15,44,28);
 $c=array(15,35,50);
 
 $d=array_diff($a,$b,$c);
 echo("New Array=");
 print_r($d);
?>