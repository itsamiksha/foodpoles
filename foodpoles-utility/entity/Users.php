<?php
/**
 * User: STG
 * Date: 8/12/14
 * Time: 10:37 AM
 */

require_once'util/UserRole.php';

class Users{
    private $id;
    private $display_name;
    private $first_name;
    private $last_name;
    private $user_role = UserRole::CUSTOMER;
    private $email_id;
    private $password;
    private $created_date;
    private $created_by;
    private $last_modified_date;
    private $last_modified__by;
    private $is_active;
    private $is_deleted;

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
     * @param mixed $display_name
     */
    public function setDisplayName($display_name)
    {
        $this->display_name = $display_name;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * @param mixed $email_id
     */
    public function setEmailId($email_id)
    {
        $this->email_id = $email_id;
    }

    /**
     * @return mixed
     */
    public function getEmailId()
    {
        return $this->email_id;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
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
     * @param mixed $last_modified__by
     */
    public function setLastModifiedBy($last_modified__by)
    {
        $this->last_modified__by = $last_modified__by;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedBy()
    {
        return $this->last_modified__by;
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
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $user_role
     */
    public function setUserRole($user_role)
    {
        $this->user_role = $user_role;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->user_role;
    }


    /**
     * contain only persistent values
     * @return array
     */

    public function entityFieldValue() {
        return array(
            "id"=> $this->getId(), "display_name"=> $this->getDisplayName()
        , "first_name"=>$this->getFirstName(), "last_name"=>$this->getLastName()
        , "user_role"=>$this->getUserRole(), "email_id"=>$this->getEmailId()
        , "password" => $this->getPassword()
        , "created_date" => $this->getCreatedDate()
        , "created_by" => $this->getCreatedBy(), "last_modified_date" => $this->getLastModifiedDate()
        , "last_modified_by" => $this->getLastModifiedBy()
        , "is_active" => $this->getIsActive(), "is_deleted" => $this->getIsDeleted()
        );
    }


}