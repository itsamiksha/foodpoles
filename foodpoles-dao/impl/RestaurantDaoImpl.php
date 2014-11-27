<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 30/10/14
 * Time: 10:38 PM
 */

require '/../AbstractDao.php';
require '/../RestaurantDao.php';

class RestaurantDaoImpl extends AbstractDao implements RestaurantDao{

    public function create($restaurant){
        parent::create($restaurant);
    }

    public function getById($id, $entity_name){
        return parent::getById($id, $entity_name);
    }

    public function getAll($entity_name){
        return parent::getAll($entity_name);
    }

    public function update($restaurant){
        return parent::update($restaurant);
    }
}
