<?php
 $name=$_POST["t1"];
 $age=$_POST["t2"];
   if($age<18)
    echo("<h1> Hello $name,you are not autherised to visit this site");
   else
    echo("<h1> Wellcome $name to this site");
?>