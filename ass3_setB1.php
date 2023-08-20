<?php
 $s1="shrirampur";
 $s2="pune";
 $k=strcmp($s1,$s2);
  if($k>0)
   echo("first string greater:");
  if($k<0)
   echo("second string greater:");
  if($k==0)
   echo(" string are same:<br><br>");
  $a=strtolower($s1);
  $b=strtolower($s2);
  $c=strtoupper($s1);
  $d=strtoupper($s2);
   echo("<br>lower string=$a");
   echo("<br>lower string=$b");
   echo("<br>upper string=$c");
   echo("<br>upper string=$d");
?>