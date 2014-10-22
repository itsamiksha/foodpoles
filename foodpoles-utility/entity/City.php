<?php
/**
 * Created by Shobhit Dixit.
 * User: STG
 * Date: 21/9/14
 * Time: 11:40 AM
 */

class City {

    private $name;
    private $cityId;
    private $state;
    private $stateId;
    private $createdDate;
    private $lastModifiedBy;
    private $isActive;
    private $isDeleted;

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param mixed $lastModifiedBy
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $stateId
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
    }

    /**
     * @return mixed
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /*function __construct()
    {
        $cityId = null;
        $createdDate = null;
        $isActive = null;
        $isDeleted = null;
        $lastModifiedBy = null;
        $name = null;
        $state = null;
        $stateId = null;
    }*/



}

$myCity = new City();
$myCity->setName('Jaipur');
echo $myCity->getName();

