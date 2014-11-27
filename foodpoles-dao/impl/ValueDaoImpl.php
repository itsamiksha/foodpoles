<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 27/11/14
 * Time: 12:17 PM
 */

function metadata_autoload ($ClassName) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/foodpoles-utility/entity/metadata/" . $ClassName . ".php";
    if(file_exists($path)) {
        include_once $path;
    }
}

spl_autoload_register("metadata_autoload");

require '/../AbstractDao.php';
require '/../ValueDao.php';
require_once'/../RedBeanPhpImpl.php';
//require_once'/../../foodpoles-utility/entity/metadata/ValueMetaData.php';

class ValueDaoImpl extends AbstractDao implements ValueDao{

    public function create($value){
        parent::create($value);
    }

    public function getById($id, $entity_name){
        return parent::getById($id, $entity_name);
    }

    public function getAll($entity_name){
        return parent::getAll( $entity_name);
    }

    public function update($value){
        return parent::update($value);
    }

    /*
     * return all value with set_id = $set_id
     * */
    public function getValueBySetId($set_id){
        $rbPhpImpl = new RedBeanPhpImpl();
        $rbPhpImpl->setUpRBPhp();
        $entityName = 'value';
        return $rbPhpImpl->find($entityName, ValueMetaData::COL_SET_ID, $set_id);
    }
}