<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 30/10/14
 * Time: 10:40 PM
 */
//error_reporting(E_ERROR | E_PARSE);

function my_autoload ($ClassName) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/foodpoles-utility/entity/metadata/" . $ClassName . ".php";
    if(file_exists($path)) {
        require_once $path;
    }
}
spl_autoload_register("my_autoload");

require_once'vendor/redbeanphp4/rb.php';
require_once'RedBeanPhpImpl.php';
//require_once'vendor/google-api-php-client-master/autoload.php';
//require_once'../foodpoles-utility/entity/metadata/RestaurantMetaData.php';
//require_once'../foodpoles-utility/entity/metadata/SetMetaData.php';



abstract class AbstractDao {

    public function create($entity){
        $rbPhpImpl = new RedBeanPhpImpl();
        $rbPhpImpl->setUpRBPhp();

        $entityName = get_class($entity);
        /*$metaData = $entityName."MetaData";
        $entityMetaData = new $metaData();

        $columnMap = $entityMetaData->getAllColumns();*/
        $entityFieldValue = $entity->entityFieldValue();
        /*
         * to remove field 'id' of every entity
         * at the time of creation
         * as id is auto-generated
         *
         * */
        $fieldName = "id";  //every entity id will be of this form
        //unset($columnMap[$fieldName]);              //unset from meta data
        unset($entityFieldValue[$fieldName]);       // unset from field value array

        $entityFieldValue = array_merge(array("_type" => strtolower($entityName)), $entityFieldValue);


        $tableContent = $rbPhpImpl->dispense($entityFieldValue);

        /*$tableContent = R::dispense(strtolower($entityName));
        foreach ($columnMap as $columnName => $columnType) {

            if(!is_null($entityFieldValue[$columnName])){
                $tableContent->$columnName = $entityFieldValue[$columnName];
            }else{
                $tableContent->$columnName = null;
            }
        }*/

        try{
            $rbPhpImpl->store($tableContent);
            echo 'New Row Added';
        }
        catch(Exception $e) {
            echo $e;
        }

        /*
        $tableContent->$property[0] = $restaurant->getName();
        $tableContent->$property[1] = $restaurant->getAddress1();
        $tableContent->$property[2] = $restaurant->getAddress2();
        $tableContent->$property[3] = $restaurant->getCityId();
        */

        }

    public function getById($id, $entityName){
        $rbPhpImpl = new RedBeanPhpImpl();
        $entityName = strtolower($entityName);

        $entityBean = $rbPhpImpl->load( $entityName, $id );
        $entity = $entityBean->getProperties();

        return /*json_encode*/($entity);
    }

    public function getAll($entityName){
        $rbPhpImpl = new RedBeanPhpImpl();
        $entityName = strtolower($entityName);
        $rbPhpImpl->setUpRBPhp();

        $allArray = $rbPhpImpl->findAll( $entityName);
        $entityArray = array();
        foreach($allArray as $entityBean){
            $entityArray[$entityBean->getProperties()['id']] = $entityBean->getProperties();
        }
        return $entityArray;
    }

    /*
     * @params: Entity
     * */

    public function update($entity){
        if($entity){
            //R::setup('mysql:host='.$this->dbHost.';dbname='.$this->dbName,$this->dbUser,$this->dbUserPassword);

            $rbPhpImpl = new RedBeanPhpImpl();
            $rbPhpImpl->setUpRBPhp();

            $entityName = strtolower(get_class($entity));
            $metaData = $entityName."MetaData";
            $entityMetaData = new $metaData();

            $columnMap = $entityMetaData->getAllColumns();
            $entityFieldValue = $entity->entityFieldValue();
            /*
             * to remove field 'id' of every entity
             * at the time of creation
             * as id is auto-generated
             *
             * */
            $fieldName = "id";  //every entity id will be of this form
            unset($columnMap[$fieldName]);              //unset from meta data
            unset($entityFieldValue[$fieldName]);       // unset from field value array

            $id = $entity->getId();
            $entityBean =$rbPhpImpl->load($entityName, $id);

            foreach ($columnMap as $columnName => $columnType) {
                $entityBean->$columnName = $entityFieldValue[$columnName];
            }
            try{

                $rbPhpImpl->store($entityBean);
                echo 'Row Updated';
            }
            catch(Exception $e) {
                echo $e;
            }
        }
    }

}