<?php
 $cname=$_POST["t1"];
 $penq=$_POST["t2"];
 $pencilq=$_POST["t3"];
 $bookq=$_POST["t4"];
$pentot=$penq*10;
$penciltot=$pencilq*5;
$booktot=$bookq*50;
$total=$pentot+$penciltot+$booktot;

echo("<center><table border=1>");
echo("<caption>Online BOOk Shop <br> Customer Name:$cname</caption>");
echo("<tr><th>Sr No<th>Product Name<th>Qty<th>Price<th>Total</tr>");
echo("<tr><td>1<td>Pen<td>$penq<td>10<td>$pentot</tr>");
echo("<tr><td>2<td>Pencil<td>$pencilq<td>5<td>$penciltot</tr>");
echo("<tr><td>3<td>Book<td>$bookq<td>50<td>$booktot</tr>");
echo("<tr><td colspan=4> Total Amount<td>$total</tr>");
echo("</center></table>");

?>