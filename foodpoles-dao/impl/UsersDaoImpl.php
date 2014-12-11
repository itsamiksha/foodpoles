<?php
/**
 * User: STG
 * Date: 9/12/14
 * Time: 12:28 PM
 */

function metadata_autoload ($ClassName) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/foodpoles-utility/entity/metadata/" . $ClassName . ".php";
    if(file_exists($path)) {
        include_once $path;
    }
}

spl_autoload_register("metadata_autoload");

require '/../AbstractDao.php';
require '/../UsersDao.php';
require_once'/../RedBeanPhpImpl.php';
//require_once'/../../foodpoles-utility/entity/metadata/UsersMetaData.php';

class UsersDaoImpl extends AbstractDao implements UsersDao{

    public function create($user){
        parent::create($user);
    }

    public function getById($id, $entity_name){
        return parent::getById($id, $entity_name);
    }

    public function getAll($entity_name){
        return parent::getAll( $entity_name);
    }

    public function update($user){
        parent::update($user);
    }

    /*
     * return user with email_id = $email_id
     * */
    public function getUserByEmailId($email_id){
        $rbPhpImpl = new RedBeanPhpImpl();
        $rbPhpImpl->setUpRBPhp();
        $entityName = 'users';
        return $rbPhpImpl->findOne($entityName, UsersMetaData::COL_EMAIL_ID, $email_id);
    }
}