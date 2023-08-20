<html>
<body>
<form action="ass5_setA2.php" method="post">
Enter Name:
 <input type="text" name="t1"><br>
Enter Address:
 <input type="text" name="t2"><br>
Enter pincode:
 <input type="text" name="t3"><br>
Gender:
 <input type="radio" name="r1" value="male">male
 <input type="radio" name="r1" value="female">female<br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
$add=$_POST["t2"];
$pin=$_POST["t3"];
$g=$_POST["r1"];
if(empty($n)||empty($add)||empty($pin)||empty($g)
)
echo("All field are required");
else
{
 echo("<br>Name=".$n);
 echo("<br>Address=".$add);
 echo("<br>pincode=".$pin);
 echo("<br>Gender=".$g);
}
?>
