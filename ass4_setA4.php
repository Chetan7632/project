<?php
  function swap($a,$b)
  {
    $temp = $a;
    $a = $b; 
    $b = $temp; 
    echo"Call By Value "; 
    echo "Value of A :".$a."<br>"; 
    echo "Value of B :".$b;
  }
  function swap1(&$a,&$b)
  {
    $temp = $a;
    $a = $b; 
    $b = $temp;
    echo "<br>Call By Reference";
    echo "Value of A : ".$a."<br>";
    echo "Value of B :".$b;
  }
   echo swap(10,20);
   $a = 10; $b =20;
  swap1($a,$b);
?>
