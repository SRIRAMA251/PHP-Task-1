<?php
//without using class
function add(){
 $a=25;
 $b=40;
 $c=$a+$b;
 return $c;

}
function sub(){
 $a=25;
 $b=40;
 $c=$a-$b;
 return $c;
}
echo "Total:" .add();
echo "<br> Difference:".sub();
echo "<br>";
//using class
class Calc{
    public $a,$b,$c;//properties
    public function add(){//methods
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    public function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
 
$add=new Calc();
$add->a=10;
$add->b=10;
echo "Total:".$add->add();
?>