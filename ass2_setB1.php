<?php
 echo("Prime No=");
  for($No=1;$No<=50;$No++)
  {
    $f=0;
    for($i=2;$i<$No;$i++)
    {
      if($No%$i==0)
       $f=1;
       break;
    }
    if($f==0)
     print("<br>$No");
  }
?>