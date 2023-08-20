<html>
<h3>User Preferece</h3>
<form method="get" action="ass5_setA1.php">
Select Background-Color
<select name=color>
<option value=red>red</option>
<option value=blue>blue</option>
<option value=cyan >cyan</option>
<option value=yellow >yellow</option>
<option value=pink >pink</option>
</select><br><br>
Select Font-Style
<select name=font>
<option value=bold>Bold</option>
<option value=italic>Italic</option>
<option value=underline>Underline</option>
</select><br><br>
Enter Login Message:
<input type="text" name="str"><br><br>
<input type="submit" value="submit">
</form>
</html>
<?php
$col=$_GET['color'];
$text=$_GET['font'];
$str=$_GET['str'];
if($col==='red')
{
echo "<body bgcolor='red'></body>";
}
else if($col==='blue')
{
echo "<body bgcolor='blue'></body>";
}
else if($col==='yellow')
{
echo "<body bgcolor='yellow'></body>";
}
else if($col==='cyan')
{
echo "<body bgcolor='cyan'></body>";
}
else
{
echo "<body bgcolor='pink'></body>";
}
if($text=='underline')
{
echo "<center><u>$str</center></u>";
}
else if($text=='italic')
{
echo "<center><i>$str</i></center>";
}
else if($text=='bold')
{
echo "<center><b>$str</center></b>";
}
?>

