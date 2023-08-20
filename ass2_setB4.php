<?php
 for($No=1;$No<=500;$No++)
  {
    $No1=$No;
    $s=0;
    while((int)$No1>0)
    {
      $d=$No1%10;
      $s=$s+($d*$d*$d);
      $No1=(int)$No1/10;
    }
    if($s==$No)
     print("<br>Armstrong No=$No");
  }
?>