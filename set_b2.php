<?php
$eno = $_GET['eno'];
$enm = $_GET['enm'];
$eadd = $_GET['eadd'];
$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3= $_POST['e3'];
echo "<h3>Employee Details</h3>";
echo "employee no : ".$_SESSION['eno']."<br>";
echo "Name : ".$_SESSION['enm']."<br>";
echo "Address : ".$_SESSION['eadd']."<br><br>";
echo "basic : ".$e1."<br>";
echo "DA : ".$e2."<br>";
echo "HRA : ".$e3."<br>";
$total = $e1+$e2+$e3;
echo "<h2>Total Of Earnings Is : ".$total."</h2>";
?>