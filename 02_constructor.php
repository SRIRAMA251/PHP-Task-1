<?php
class Calc{
    // public $a,$b,$c;
    // function __construct(){
    //     echo "construct Called";
    // }//default consturctor
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;

    }
    public function add(){//methods
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    public function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
$obj=new Calc(100,20);
echo $obj->add();
?>