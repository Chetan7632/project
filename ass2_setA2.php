<html>
 <body>
  <form method="post" action="ass2_setA2.php">
   Number 1:
    <input type="text" name="t1"><br>
   Number 2:
    <input type="text" name="t2"><br>
   Enter choice: <br> 1-Add<br> 2-Sub<br> 3-Mul<br> 4-Div<br>
    <input type="number" name="t3"><br>
   <input type="submit" value="ok">
  </form>
 </body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["t3"];
  switch($ch)
  {
    case 1:$ch=$a+$b;
           echo("Addition=$ch");
           break;
    case 2:$ch=$a-$b;
           echo("Substraction=$ch");
           break;
    case 3:$ch=$a*$b;
           echo("Multiplication=$ch");
           break;
    case 4:$ch=$a/$b;
           echo("Division=$ch");
           break;
  }
?>