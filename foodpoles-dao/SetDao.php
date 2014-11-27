<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 24/11/14
 * Time: 11:40 PM
 */

interface SetDao
{

    public function create($set);

    public function getById($id, $entity_name);

    public function getAll($entity_name);

    public function update($set);

    public function getByName($set_name);

/*
    public function remove($id);*/

}
