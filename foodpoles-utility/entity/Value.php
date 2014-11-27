<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 27/11/14
 * Time: 11:30 AM
 */

class Value{

    //persistent
    private $id;
    //persistent
    private $set_id;
    //persistent
    private $value;             // value name
    //persistent
    private $value_upper_case;
    //persistent
    private $parent_value_id;
    //not-persistent
    private $set;
    //not-persistent
    private $parent_value;
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
     * @param mixed $parent_value
     */
    public function setParentValue($parent_value)
    {
        $this->parent_value = $parent_value;
    }

    /**
     * @return mixed
     */
    public function getParentValue()
    {
        return $this->parent_value;
    }

    /**
     * @param mixed $parent_value_id
     */
    public function setParentValueId($parent_value_id)
    {
        $this->parent_value_id = $parent_value_id;
    }

    /**
     * @return mixed
     */
    public function getParentValueId()
    {
        return $this->parent_value_id;
    }

    /**
     * @param mixed $set
     */
    public function setSet($set)
    {
        $this->set = $set;
    }

    /**
     * @return mixed
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @param mixed $set_id
     */
    public function setSetId($set_id)
    {
        $this->set_id = $set_id;
    }

    /**
     * @return mixed
     */
    public function getSetId()
    {
        return $this->set_id;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value_upper_case
     */
    public function setValueUpperCase($value_upper_case)
    {
        $this->value_upper_case = $value_upper_case;
    }

    /**
     * @return mixed
     */
    public function getValueUpperCase()
    {
        return $this->value_upper_case;
    }

    /**
     * contain only persistent values
     * @return array
     */
    public function entityFieldValue() {
        return array(
            "id" => $this->getId(), "set_id" => $this->getSetId(), "value" => $this->getValue()
        , "value_upper_case" => $this->getValueUpperCase(), "parent_value_id" => $this->getParentValueId()
        , "last_modified_date" => $this->getLastModifiedDate(), "last_modified_by" => $this->getLastModifiedBy()
        , "created_date" => $this->getCreatedDate(), "created_by" => $this->getCreatedBy()
        , "is_deleted" => $this->getIsDeleted(), "is_active" => $this->getIsActive()
        );
    }

}