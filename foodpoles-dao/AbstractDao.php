<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 30/10/14
 * Time: 10:40 PM
 */
require_once'vendor/redbeanphp4/rb.php';
require_once'vendor/google-api-php-client-master/autoload.php';


abstract class AbstractDao {

    private $dbHost = 'localhost';
    private $dbName = 'rbtest';
    private $dbUser = 'root';
    private $dbUserPassword = '';
    private $freezeTable = 'FALSE';

    public function create($restaurant){

    print_r($restaurant->toString());
    echo($restaurant->toString().substr(2,1));
    R::setup('mysql:host='.$this->dbHost.';dbname='.$this->dbName,$this->dbUser,$this->dbUserPassword);
    //R::freeze($this->freezeTable);
    $tableName = 'restaurant';
    //$property = array('name','address1','address2','cityId');
    //$property = get_class_vars(get_class($restaurant));
    //print_r($property);
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