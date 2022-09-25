<?php
require 'animal.php';
   class Cow extends Animal{ 
   
    public function __construct($family, $food)
    {
        $this->family=$family;
        $this->food=$food;        
    }
}

$big=new Cow('cow','greenfood');
echo $big->getFamily();
echo "<br>";
echo $big->getFood();

?>