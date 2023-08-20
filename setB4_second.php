<?php
 $name=$_POST["t1"];
 $email=$_POST["t2"];
 $age=$_POST["t3"];
$f=0;
  if(empty($name))
  {
    $f=1;
    echo("Must Enter Name");
  }
  if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
  {
    $f=1;
     echo("Must Enter Validate Email Address");
  }
  if(filter_var($age,FILTER_VALIDATE_INT)==false)
  {
    $f=1;
     echo("Must Enter Validate Age");
  }
  if($f==0)
  {
    echo("<br>Name=".$name);
    echo("<br>Email Address=".$email);
    echo("<br>Age=".$age);
    
  }
?>