<?
require 'animal.php';
class Lion extends Animal{
    private $owner;
    public function __construct($family, $food)
    {
        $this->family=$family;
        $this->food=$food;        
    }
    public function setOwner($owner){
        $this->owner=$owner;
    }

    public function getOwner(){
        return $this->owner;
    }
    
}
$extreem=new Lion('lions', 'meat');
echo $extreem->getFamily();

 $extreem->setOwner('hala');
 
 echo $extreem->getOwner();

