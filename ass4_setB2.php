<?php
  class Student 
  { 
     public $rno,$sname,$per;
     function accept($rno,$sname,$per) 
     { 
       $this->rno= $rno;
       $this->sname= $sname;
       $this->per= $per;
     }
      function display() 
      {
         echo("<br> Roll NO=".$this->rno);
         echo("<br> Student Name=".$this->sname);
         echo("<br> Per=".$this->per);
      }
   }
    $ob=new Student();
    $ob->accept(101,"om",80.22);
    $ob->display();
?>