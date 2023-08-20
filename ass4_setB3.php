<?php
 class Book
 {
   public $Book_id,$Book_name,$Publication,$Author,$Book_price;
 
 function accept($Book_id,$Book_name,$Publication,$Author,$Book_price)
 {
   $this->Book_id = $Book_id;
   $this->Book_name = $Book_name;
   $this->Publication = $Publication;
   $this->Author = $Author;
   $this->Book_price = $Book_price;
 }
 function display()
 {
    echo("<br> Book_id=".$this->Book_id);
    echo("<br> Book_name=".$this->Book_name);
    echo("<br> Publication=".$this->Publication);
    echo("<br> Author=".$this->Author);
    echo("<br> Book_price=".$this->Book_price);
 }
 }
  $ob=new Book();
  $ob->accept(304,"PHP","NIRALI","Prof.Gajanan A.Deshmukh",240);
  $ob->display();
?>

