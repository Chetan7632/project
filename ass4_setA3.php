 <?php
   function maxi($a,$b,$c)
   { 
      if($a>$b &&$a>$c)
      { 
        echo("<br>maximum no=".$a);
      }
      elseif($b>$a && $b>$c)
      {
        echo("<br>maximum no=".$b);
      }
      else
      {
        echo("<br>maximum no=".$c);
      }
   }
echo maxi(30,10,20);
?>
