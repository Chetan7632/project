<?php
 $n=$_POST["t1"];
 $q1=$_POST["r1"];
 $q2=$_POST["r2"];
 $q3=$_POST["r3"];

 $t=$q1+$q2+$q3;

 echo("<table border=1>");
 echo("<caption> Name=$n</caption>");
 echo("<tr><th> Question No <th> Marks</tr>");
 echo("<tr><td> 1 <td> $q1 </tr>");
 echo("<tr><td> 2 <td> $q2 </tr>");
 echo("<tr><td> 3 <td> $q3 </tr>");
 echo("<tr><td>Total Marks<td>$t</tr>");
echo("</table>");
?>