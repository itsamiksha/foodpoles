<?php
/**
 * User: STG
 * Date: 9/12/14
 * Time: 12:25 PM
 */

interface UsersDao
{

    public function create($user);

    public function getById($id, $entity_name);

    public function getAll($entity_name);

    public function update($user);

    public function getUserByEmailId($email_id);

    /*
        public function remove($id);*/

}