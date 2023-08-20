<html>
<body>
 <form method ="post" action="ass1_setB2.php">
 Enter redius:
 <input type ="text" name="t1"><br>
 Enter length:
 <input type ="text" name="t2"><br>
 Enter breagth:
 <input type ="text" name="t3"><br>
 <input type="submit" value="ok">
 </form>
</body>
</html>
<?php
 $r=$_POST["t1"];
 $l=$_POST["t2"];
 $b=$_POST["t3"];
 $c=3.14*$r*$r;
 $s=$l*$l;
 $r=$l*$b;
 echo("<br> area of circle=".$c);
 echo("<br>area of square=".$s);
 echo("<br>area of rect=".$r);
?>
