<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 24/11/14
 * Time: 11:43 PM
 */
function metadata_autoload ($ClassName) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/foodpoles-utility/entity/metadata/" . $ClassName . ".php";
    if(file_exists($path)) {
        include_once $path;
    }
}

spl_autoload_register("metadata_autoload");

require '/../AbstractDao.php';
require '/../SetDao.php';
require_once'/../RedBeanPhpImpl.php';
//require_once'/../../foodpoles-utility/entity/metadata/SetMetaData.php';

class SetDaoImpl extends AbstractDao implements SetDao{

    public function create($set){
        parent::create($set);
    }

    public function getById($id, $entity_name){
        return parent::getById($id, $entity_name);
    }

    public function getAll($entity_name){
        return parent::getAll( $entity_name);
    }

    public function update($set){
        return parent::update( $set);
    }

    public function getByName($set_name){
        $rbPhpImpl = new RedBeanPhpImpl();
        $rbPhpImpl->setUpRBPhp();
        $entityName = 'set';
        return $rbPhpImpl->findOne($entityName,SetMetaData::COL_SET_NAME_UPPER_CASE, strtoupper($set_name) );
    }
}
