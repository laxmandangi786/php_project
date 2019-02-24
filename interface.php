<!-- <?php 
//  lax{             //the interface is used to define the abstruct class ,function where more than condition of abstruct funcyion 
// public function laxman(); //we implement the more than one interface in the class but we not able to extent the more than one class
// }
?>
-->

<?php  
  
interface MyInterfaceName { 
   public  function methodA(); 
   public  function methodB(); 
} 

class laxman implements MyInterfaceName{ 
  
    public  function methodA() {  
   
      echo"my name is laxman dangi";
    }  
    public  function methodB(){  
   
        echo"my name is lucky dangi";
    }  
 } 
 $obj=new laxman();
 $obj->methodA();
 $obj->methodB();

  
?> 
