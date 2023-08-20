<?php
 $a=array(array("Data Structure","PHP","Big Data","Software Engg"),         
          array(44,55,66,77,88),
          array("Java","Python","CPP"),
          array("Shrirampur","Belapur","Kesapur")
         );
 print_r($a);
 $f=0;
 foreach($a as $b)
 {
 if(array_search("Python",$b))
 $f=1;
 }
 if($f==1)
 echo("<br> python found in the array");
 else
 echo("<br> python not found in array");
?>
