<?php
 function check($n)
 {
   if($n%2==0)
    echo("<br> Even No=".$n);
 }
 $a=array(10,14,37,45,17,50);
 array_walk($a,'check');
?>