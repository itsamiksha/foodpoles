<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 24/11/14
 * Time: 5:37 PM
 */

class Set{

    //persistent
    private $id;
    //persistent
    private $set_name;
    //persistent
    private $set_name_upper_case;
    //persistent
    private $parent_set_id;
    //not-persistent
    private $parent_set;
    //persistent
    private $last_modified_date;
    //persistent
    private $last_modified_by;
    //persistent
    private $created_date;
    //persistent
    private $created_by;
    //persistent
    private $is_deleted = false;
    //persistent
    private $is_active = true;

    /**
     * @param mixed $created_by
     */
    public function setCreatedBy($created_by)
    {
        $this->created_by = $created_by;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @param mixed $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param mixed $is_deleted
     */
    public function setIsDeleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    /**
     * @param mixed $last_modified_by
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->last_modified_by = $last_modified_by;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedBy()
    {
        return $this->last_modified_by;
    }

    /**
     * @param mixed $last_modified_date
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->last_modified_date = $last_modified_date;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedDate()
    {
        return $this->last_modified_date;
    }

    /**
     * @param mixed $parent_set
     */
    public function setParentSet($parent_set)
    {
        $this->parent_set = $parent_set;
    }

    /**
     * @return mixed
     */
    public function getParentSet()
    {
        return $this->parent_set;
    }

    /**
     * @param mixed $parent_set_id
     */
    public function setParentSetId($parent_set_id)
    {
        $this->parent_set_id = $parent_set_id;
    }

    /**
     * @return mixed
     */
    public function getParentSetId()
    {
        return $this->parent_set_id;
    }

    /**
     * @param mixed $set_name
     */
    public function setSetName($set_name)
    {
        $this->set_name = $set_name;
    }

    /**
     * @return mixed
     */
    public function getSetName()
    {
        return $this->set_name;
    }

    /**
     * @param mixed $set_name_upper_case
     */
    public function setSetNameUpperCase($set_name_upper_case)
    {
        $this->set_name_upper_case = $set_name_upper_case;
    }

    /**
     * @return mixed
     */
    public function getSetNameUpperCase()
    {
        return $this->set_name_upper_case;
    }



    /**
     * contain only persistent values
     * @return array
     */

    public function entityFieldValue() {
        return array(
            "id" => $this->getId(), "set_name" => $this->getSetName()
        , "set_name_upper_case" => $this->getSetNameUpperCase(), "parent_set_id" => $this->getParentSetId()
        , "last_modified_date" => $this->getLastModifiedDate(), "last_modified_by" => $this->getLastModifiedBy()
        , "created_date" => $this->getCreatedDate(), "created_by" => $this->getCreatedBy()
        , "is_deleted" => $this->getIsDeleted(), "is_active" => $this->getIsActive()
        );
    }



}