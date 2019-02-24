<?php

class lax
{
    protected static $table="laxman";

    public function select()
    {

        echo "SELECT * FROM ".static::$table; //we write static it show static binding
    }
    public function insert()
    {
        echo "INSERT INTO ". self::$table ." values() ";

    }
}
class man extends lax
{

    protected static $table=" lucky  ";
}
 $obj=new man();
 $obj->select();
 $obj->insert();
?>