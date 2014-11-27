<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 23/11/14
 * Time: 7:15 PM
 */
function metadata_autoloader($class) {
    include $_SERVER['DOCUMENT_ROOT'].'/foodpoles-dao/' . $class . '.php';
}
spl_autoload_register('metadata_autoloader');

class RestaurantDaoImpll{
    private $a;
    private $b;

    public function setA($a)
    {
        $this->a = $a;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getB()
    {
        return $this->b;
    }

}
$a = new Test();
$a->a();
//$rest = new RestaurantDaoImpl();
$className = "RestaurantDao";
$entityMetaData = $className."Impll";
$rest = new $entityMetaData();
echo get_class($rest);