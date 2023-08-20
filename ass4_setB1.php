<?php
  class Fruit 
  { 
     public $Name,$Color,$Price;
     function accept($name,$color,$price) 
     { 
       $this->name = $name;
       $this->color = $color;
       $this->price = $price;
     }
      function display() 
      {
         echo("<br> Name=".$this->name);
         echo("<br> Color=".$this->color);
         echo("<br> Price=".$this->price);
      }
   }
    $ob=new Fruit();
    $ob->accept("Mango",'yellow',25);
    $ob->display();
?>