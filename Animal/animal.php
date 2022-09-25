<?php
class Animal{
    private $family;
    private $food;
    
    public  function __construct($family, $food){
        $this->family=$family;
        $this->food=$food;
    }

    public function setFamily($family){
        $this->family=$family;
    }
    public function getFamily(){
        return $this->family;
    }

    public function setFood($food){
        $this->food=$food;
    }
    public function getFood(){
        return $this->food;
    }
    
}
$small=new Animal('cat','dryfood');
echo $small->getFamily();
echo "<br>";
echo $small->getFood();