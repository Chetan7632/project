<?php
function areaCuboid($l, $h, $w)
{
return ($l * $h * $w);
}
function surfaceAreaCuboid($l, $h, $w)
{
return (2 * $l * $w + 2 * $w *
$h + 2 * $l * $h);
}
$l = 3;
$h = 7;
$w = 9;
echo "Area = " ,
areaCuboid($l, $h, $w) , "\n";
echo "<br>Total Surface Area = ",
surfaceAreaCuboid($l, $h, $w);
?>
