<?php
 function check_no($n)
 {
  if($n %2==0)
   return true;
  else
   return false;
 }

 $a=array(10,22,35,12,27,25,30);
 $ans=array_filter($a,'check_no');
 echo("Even no=");
  print_r($ans);
?>
