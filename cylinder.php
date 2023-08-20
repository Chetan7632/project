<?php
 function area($r,$h)
 {
   $a=2*3.14*$r*$h+2*3.14*$r*$r;
    echo("<br> Area of Cylinder=".$a);
 }
 function volume($r,$h)
 {
   $v=3.14*$r*$r*$h;
    echo("<br> Volume of Cylinder=".$v);
 }
 
 area(4,5,7,6);
 volume(4,5,7,6);
?>