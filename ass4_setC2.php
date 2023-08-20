<html>
  <div class="container-fluid">
  <div class="col-10">
  <form action="#" method="post">
     <label for="">A: </label>
      <input type="text" name="a" class="include">
     <label for="">B : </label>
      <input type="text" name="b" class="include"><br><br>
    <input type="submit" value="Submit" class="btn btn-primary">
   <input type="reset" value="Reset" class="btn btn-danger">
  </form>
</div>
 </div>
</html>
<?php
   if(isset($_POST['a']))
   {
     $a = $_POST['a'];
     $b = $_POST['b'];
   function add($num1, $num2=5)
   {
     $sum=$num1+$num2;
     echo "The Addition is : $sum";
   }
   function sub($num1, $num2=5)
   {
     $sum=$num1-$num2;
     echo "The Subtraction is : $sum";
   }
   function mul($num1, $num2=5)
   {
     $sum=$num1*$num2;
     echo "The Multiplication is : $sum";
   }
   function div($num1, $num2=5)
   {
     $sum=$num1/$num2;
     echo "The Division is : $sum";
   }
    add($a,$b) ;
    echo "<br>";
    sub($a,$b) ;
    echo "<br>";
    mul($a,$b) ;
    echo "<br>";
    div($a,$b);
 }
?>
 