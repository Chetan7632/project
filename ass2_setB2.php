<?php
 echo("Perfect No=");
  for($No=1;$No<=100;$No++)
  {
    $s=0;
    for($i=1;$i<$No;$i++)
    {
      if($No%$i==0)
       $s=$s+$i;
    }
    if($s==$No)
     print("<br>$No");
  }
?>