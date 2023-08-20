<html>
<body>
<form method="POST"action="ass1_setB3.php">
Data Structure:
<input type="text" name="t1"><br>
Digital Marketing:
<input type="text" name="t2"><br>
PHP:
<input type="text" name="t3"><br>
Softwere enginearing:
<input type="text" name="t4"><br>
Big data:
<input type="text" name="t5"><br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $c=$_POST["t3"];
 $d=$_POST["t4"];
 $e=$_POST["t5"];
 $t=$a+$b+$c+$d+$e;
 $p=$t/5;
 echo("<br>Total Marks=".$t);
 echo("<br>Percentage=".$p);
?>
