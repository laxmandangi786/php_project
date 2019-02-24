<?php

namespace laxman {

    class abc{

        public function lax1()
        {
            echo"my name is laxman";
            
            return $this;
        }
        
        public function lax2()
        {
            echo"my name is laxman";
            return $this;
        }
        public function lax3()
        {
            echo"my name is laxman";
            return $this;
        }
    }
    
}
namespace{
    
    $obj= new laxman\abc();
    $obj->lax1()->lax2()->lax3();
}

?>