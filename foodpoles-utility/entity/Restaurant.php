<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 29/10/14
 * Time: 1:33 PM
 */

class Restaurant {

    private $name;
    private $restaurantId;
    private $address1;
    private $address2;
    private $address3;
    private $cityId;
    private $cityName;
    private $phoneNo;
    private $createdDate;
    private $createdBy;
    private $lastModifiedBy;
    private $lastModifiedDate;
    private $isActive;
    private $isDeleted;
    //filters
    private $openTime;
    private $closeTime;
    private $deliveryFee;
    private $deliveryTime;
    private $minDelivery;
    private $onlinePay;
    private $pureVeg;
    private $preOrder;
    private $homeDelivery;
    private $pickUp;
    private $dealsAvailable;
    private $midnightDeals;
    private $breakfast;
    private $eveningSnacks;

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param $address3
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * @return mixed
     */
    public function getAddress3()
    {
        return $this->address3;
    }


    /**
     * @param mixed $breakfast
     */
    public function setBreakfast($breakfast)
    {
        $this->breakfast = $breakfast;
    }

    /**
     * @return mixed
     */
    public function getBreakfast()
    {
        return $this->breakfast;
    }

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
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $closeTime
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @return mixed
     */
    public function getCloseTime()
    {
        return $this->closeTime;
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
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $dealsAvailable
     */
    public function setDealsAvailable($dealsAvailable)
    {
        $this->dealsAvailable = $dealsAvailable;
    }

    /**
     * @return mixed
     */
    public function getDealsAvailable()
    {
        return $this->dealsAvailable;
    }

    /**
     * @param mixed $deliveryFee
     */
    public function setDeliveryFee($deliveryFee)
    {
        $this->deliveryFee = $deliveryFee;
    }

    /**
     * @return mixed
     */
    public function getDeliveryFee()
    {
        return $this->deliveryFee;
    }

    /**
     * @param mixed $deliveryTime
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return mixed
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param mixed $eveningSnacks
     */
    public function setEveningSnacks($eveningSnacks)
    {
        $this->eveningSnacks = $eveningSnacks;
    }

    /**
     * @return mixed
     */
    public function getEveningSnacks()
    {
        return $this->eveningSnacks;
    }

    /**
     * @param mixed $homeDelivery
     */
    public function setHomeDelivery($homeDelivery)
    {
        $this->homeDelivery = $homeDelivery;
    }

    /**
     * @return mixed
     */
    public function getHomeDelivery()
    {
        return $this->homeDelivery;
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
     * @param mixed $lastModifiedDate
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param mixed $midnightDeals
     */
    public function setMidnightDeals($midnightDeals)
    {
        $this->midnightDeals = $midnightDeals;
    }

    /**
     * @return mixed
     */
    public function getMidnightDeals()
    {
        return $this->midnightDeals;
    }

    /**
     * @param mixed $minDelivery
     */
    public function setMinDelivery($minDelivery)
    {
        $this->minDelivery = $minDelivery;
    }

    /**
     * @return mixed
     */
    public function getMinDelivery()
    {
        return $this->minDelivery;
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
     * @param mixed $onlinePay
     */
    public function setOnlinePay($onlinePay)
    {
        $this->onlinePay = $onlinePay;
    }

    /**
     * @return mixed
     */
    public function getOnlinePay()
    {
        return $this->onlinePay;
    }

    /**
     * @param mixed $openTime
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }

    /**
     * @return mixed
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * @param mixed $phoneNo
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
    }

    /**
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * @param mixed $pickUp
     */
    public function setPickUp($pickUp)
    {
        $this->pickUp = $pickUp;
    }

    /**
     * @return mixed
     */
    public function getPickUp()
    {
        return $this->pickUp;
    }

    /**
     * @param mixed $preOrder
     */
    public function setPreOrder($preOrder)
    {
        $this->preOrder = $preOrder;
    }

    /**
     * @return mixed
     */
    public function getPreOrder()
    {
        return $this->preOrder;
    }

    /**
     * @param mixed $pureVeg
     */
    public function setPureVeg($pureVeg)
    {
        $this->pureVeg = $pureVeg;
    }

    /**
     * @return mixed
     */
    public function getPureVeg()
    {
        return $this->pureVeg;
    }

    /**
     * @param mixed $restaurantId
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    /**
     * @return mixed
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    public function entityFieldValue() {
    return array(
        "id"=> $this->getRestaurantId(), "restaurantName"=> $this->getName()
        , "address1"=>$this->getAddress1(), "address2"=>$this->getAddress2()
        , "address3"=>$this->getAddress3(), "cityId"=>$this->getCityId()
        , "cityName" => $this->getCityName()
        , "phoneNo" => $this->getPhoneNo()
        , "createdDate" => $this->getCreatedDate()
        , "createdBy" => $this->getCreatedBy(), "lastModifiedBy" => $this->getLastModifiedBy()
        , "lastModifiedDate" => $this->getLastModifiedDate()
        , "isActive" => $this->getIsActive(), "isDeleted" => $this->getIsDeleted()
        , "openTime" => $this->getOpenTime()
        , "closeTime" => $this->getCloseTime(), "deliveryFee" => $this->getDeliveryFee()
        , "deliveryTime" => $this->getDeliveryTime()
        , "minDelivery" => $this->getMinDelivery(), "onlinePay" => $this->getOnlinePay()
        , "pureVeg" => $this->getPureVeg(), "preOrder" => $this->getPreOrder()
        , "homeDelivery" => $this->getHomeDelivery(), "pickUp" => $this->getPickUp()
        , "dealsAvailable" => $this->getDealsAvailable()
        , "midnightDeals" => $this->getMidnightDeals(), "breakfast" => $this->getBreakfast()
        , "eveningSnacks" => $this->getEveningSnacks()
    );
    }


}