<!-- <?php 
// trait lax
// {
//     protected $laxman=" lucky dangi ";
//     public function fa()
//     {
//         echo "my name is laxman means ".$this->laxman." dangi ";
//     }
//     protected static $laxm=" lucky dangi ";
//     public function fa1()
//     {
//         echo "my name is laxman means ".self::$laxm." dangi ";
//     }
// }
// class man 
// {
//     use lax;
// }
// $obj =new man();
// $obj->fa();
// $obj->fa1();
?> -->

<?php
trait lax{
    public function test()
    {
        echo"this is traits one";
    }
}
trait lax1{
    public function test()
    {
        echo"this is traits two";
    }
}

class laxman
{
    use lax,lax1
    {   lax::test insteadof lax1;
        lax1::test as testlax1;
    }
    

}
$o=new laxman();
$o->test();

?>

