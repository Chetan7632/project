<?php

 $a=array(15,25,35,45,55);
 sum_avg($a);

 function sum_avg($a)
 {
   $s=0;
   foreach($a as $v)
   {
     $s=$s+$v;
   }
   $avg=$s/5;
   echo("<br> Array Sum=".$s);
   echo("<br> Array Average=".$avg);
   
 }
?>