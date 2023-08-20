<?php
 $a=array("omkar"=>"58","sai"=>"64","aman"=>"87","dada"=>"96");
 
 echo("<br> Display Along With Keys:<br>");
 print_r($a);
 
 echo("<br> Size of Array=".count($a));
 
 unset($a['sai']);
 echo("<br> After Delete:<br>");
 print_r($a);
 
 $b=array_reverse($a);
 echo("<br> Reverse:<br>");
 print_r($b);
  
 shuffle($a);
 echo("<br> Random Order:");
 print_r($a);
?>