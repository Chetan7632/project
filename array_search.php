<?php
 $a=array(10,12,33,35,13,40);
 $ans=array_search(35,$a);

 if($ans==false)
  printf("Number not found");
 else
  printf("Number found position=".$ans);
?>