<?php
 $es=0;
 $os=0;
 for($i=1;$i<=1000;$i++)
 {
   if($i%2==0)
    $es++;
   else
    $os++;
 }
 echo("Even Sum=$es");
 echo("<br> Odd Sum=$os")
?>