<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 27/11/14
 * Time: 12:02 PM
 */

interface ValueDao
{

    public function create($value);

    public function getById($id, $entity_name);

    public function getAll($entity_name);

    public function update($value);

    public function getValueBySetId($set_id);


    /*
        public function remove($id);*/

}
