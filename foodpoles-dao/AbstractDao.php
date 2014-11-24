<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 30/10/14
 * Time: 10:40 PM
 */
error_reporting(E_ERROR | E_PARSE);

function my_autoload ($ClassName) {
    include($_SERVER['DOCUMENT_ROOT'] . "/foodpoles-utility/entity/metadata/" . $ClassName . ".php");
}
spl_autoload_register("my_autoload");

require_once'vendor/redbeanphp4/rb.php';
//require_once'vendor/google-api-php-client-master/autoload.php';
//require_once'../foodpoles-utility/entity/metadata/RestaurantMetaData.php';



abstract class AbstractDao {

    private $dbHost = 'localhost';
    private $dbName = 'rb';
    private $dbUser = 'root';
    private $dbUserPassword = 'root';
    private $freezeTable = 'FALSE';

    public function create($entity){
        R::setup('mysql:host='.$this->dbHost.';dbname='.$this->dbName,$this->dbUser,$this->dbUserPassword);
        //R::freeze($this->freezeTable);

        $className = get_class($entity);
        $metaData = $className."MetaData";
        $entityMetaData = new $metaData();

        $columnMap = $entityMetaData->getAllColumns();
        $entityFieldValue = $entity->entityFieldValue();


        $tableCont = R::dispense(strtolower($className));
        foreach ($columnMap as $columnName => $columnType) {
            if($columnName == 'id'){
                continue;
            }
            if(!is_null($entityFieldValue[$columnName])){
                $tableCont->$columnName = $entityFieldValue[$columnName];
            }else{
                $tableCont->$columnName = null;
            }

        }

        try{

            R::store($tableCont);
            echo 'New Row Added';
        }
        catch(Exception $e) {
            echo $e;
        }

        /*$tableCont= R::dispense($tableName);

        $tableCont->$property[0] = $restaurant->getName();
        $tableCont->$property[1] = $restaurant->getAddress1();
        $tableCont->$property[2] = $restaurant->getAddress2();
        $tableCont->$property[3] = $restaurant->getCityId();

        try{
            R::store($tableCont);
            echo 'New Row Added';
        }
        catch(Exception $e) {
            echo $e;
        }*/

        }

}