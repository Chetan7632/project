<html>
 <body>
  <form method="post" action="ass2_setC2.php">
   Enter Day:
     <input type="text" name="t1"><br>
    <input type="submit" value="OK">
  </form>
 </body>
</html>
<?php
 $d=$_POST["t1"];
  switch($d)
  {
    case "Monday":echo("<body bgcolor=red>");
                  break;
    case "Tuesday":echo("<body bgcolor=orange>");
                  break;
    case "Wednesday":echo("<body bgcolor=green>");
                  break;
    case "Thursday":echo("<body bgcolor=yellow>");
                  break;
    case "Friday":echo("<body bgcolor=blue>");
                  break;
    case "Saturday":echo("<body bgcolor=pink>");
                  break;
    case "Sunday":echo("<body bgcolor=black>");
                  break;
  }
?>
