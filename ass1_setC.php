<html>
<body>
<form method="POST"action="ass1_setC.php">
name:
<input type="text" name="t1"><br>
address:
<textarea name="t2"></textarea><br>
phone number:
<input type="number" name="t3"><br>
source:
<input type="text" name="t4"><br>
destination:
<input type="text" name="t5"><br>
date of journey:
<input type="date" name="t6"><br>
gender:
<input type="radio" name="r1" value="male">Male
<input type="radio" name="r1" value="female">Female
<br>
number of person:
<input type="number" name="t7"><br>
price per ticket:
<input type="price" name="t8"><br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
 $name=$_POST["t1"];
 $addr=$_POST["t2"];
 $pno=$_POST["t3"];
 $sou=$_POST["t4"];
 $dest=$_POST["t5"];
 $doj=$_POST["t6"];
 $gen=$_POST["r1"];
 $nop=$_POST["t7"];
 $ppt=$_POST["t8"];

 $tot=$nop*$ppt;
 echo("<br>name=$name");
 echo("<br>address=$addr");
 echo("<br> phone number=$pno");
 echo("<br>source=$sou");
 echo("<br>destination=$dest");
 echo("<br> date of journey=$doj");
 echo("<br>gender=$gen");
 echo("<br> noumber of person=$nop");
 echo("<br> price per ticket=$ppt");
 echo("<br>total amount=$tot");
?>
