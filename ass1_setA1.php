<html>
<body>
 <form method ="post" action="ass1_setA1.php">
 Enter no 1:
 <input type ="text" name="t1"><br>
 Enter no 2:
 <input type ="text" name="t2"><br>
 <input type="submit" value="ok">
 </form>
</body>
</html>
<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 echo("<br> quotient=".$a/$b);
 echo("<br>remainder=".$a%$b);
?>
