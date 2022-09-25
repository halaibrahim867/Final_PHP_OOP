<?php
class SchoolSingleton{
    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;
    
    private function __construct($name, $add){
        self::$schoolName= $name;
        self::$schoolAdd =$add; 
    }

    public static function  getInstance($name , $add){
        if(!(self::$singleInstance instanceof self)){
            $singleInstance = new self ($name , $add);
        }
            return $singleInstance;
    }

    public static function getSchoolName(){
        return self::$schoolName;
    }

    public static function getSchoolAdd(){
        return self::$schoolAdd;
    }

    private function __clone()
    {
         
    }

}

$singleInstance = SchoolSingleton::getInstance('greatschool' ,'21-street-dakahlia');
var_dump( $singleInstance);


 var_dump( SchoolSingleton::getSchoolName());
var_dump(SchoolSingleton::getSchoolAdd());


$singleInstance_2 = SchoolSingleton::getInstance('badschool' ,'25-street-dakahlia');
var_dump( $singleInstance_2);


var_dump( SchoolSingleton::getSchoolName());
var_dump(SchoolSingleton::getSchoolAdd());

 