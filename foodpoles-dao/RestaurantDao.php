<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 30/10/14
 * Time: 10:11 PM
 */

interface RestaurantDao{

    public function create($restaurant);

    public function getById($id, $entity_name);

    public function getAll($entity_name);

    public function update($restaurant);
/*

public function getByName($restaurant_name);




public function remove($id);*/

}

