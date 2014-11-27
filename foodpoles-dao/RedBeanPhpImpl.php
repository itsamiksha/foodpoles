<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 27/11/14
 * Time: 1:31 AM
 */

require_once'vendor/redbeanphp4/rb.php';

class RedBeanPhpImpl{
    private $dbHost = 'localhost';
    private $dbName = 'rb';
    private $dbUser = 'root';
    private $dbUserPassword = 'root';
    private $freezeTable = true;

    public function setUpRBPhp(){
       $setUp = R::setup('mysql:host='.$this->dbHost.';dbname='.$this->dbName,$this->dbUser,$this->dbUserPassword);
       //R::freeze($this->freezeTable);
       return $setUp;
    }

    public function dispense($bean){
       return R::dispense($bean);
    }

    public function store($cont){
        try{
            return R::store($cont);
        }
        catch(Exception $e) {
            return $e;
        }
    }

    public function load($entityName, $id){
        return  R::load( $entityName, $id );
    }

    public function findAll($entityName){
        return R::findAll($entityName);
    }

    /*
     * return one bean
     * */
    public function findOne($entityName, $property, $propertyValue){
        $temp = $property.' = ? ';
        // R::findOne( 'set', ' set_name_upper_case	 = ? ', [ 'AREA' ]);
        return R::findOne( $entityName , $temp, [ $propertyValue ]);
    }

    /*
     * return array of beans
     * */
    public function find($entityName, $property, $propertyValue){
        $temp = $property.' LIKE ? ';
        // R::find( 'value', ' set_id LIKE ? ', [ '5' ] );
        return R::find( $entityName, $temp, [ $propertyValue ] );
    }

}