<?php
function evenodd()
{
  for($i=1; $i<=50; $i++)
  {
     if($i%2==0)
      echo"<br>Even Numbers : ". $i;
  }
   if($i%2!=0)
   {
    echo "<br>Odd Numbers : " . $i;
   }

}
echo EvenOdd()
?>
