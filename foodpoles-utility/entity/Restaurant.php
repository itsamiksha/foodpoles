<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 29/10/14
 * Time: 1:33 PM
 */

class Restaurant {

    private $restaurant_name;
    private $id;
    private $address1;
    private $address2;
    private $address3;
    private $city_id;
    private $city_name;
    private $phone_no;
    private $created_date;
    private $created_by;
    private $last_modified_by;
    private $last_modified_date;
    private $is_active = true;
    private $is_deleted = false;
    //filters
    private $open_time;
    private $close_time;
    private $delivery_fee;
    private $delivery_time;
    private $min_delivery;
    private $online_pay;
    private $pure_veg;
    private $pre_order;
    private $home_delivery;
    private $pick_up;
    private $deals_available;
    private $midnight_deals;
    private $breakfast;
    private $evening_snacks;

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
     * @param mixed $address3
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
     * @param mixed $city_id
     */
    public function setCityId($city_id)
    {
        $this->city_id = $city_id;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_name
     */
    public function setCityName($city_name)
    {
        $this->city_name = $city_name;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * @param mixed $close_time
     */
    public function setCloseTime($close_time)
    {
        $this->close_time = $close_time;
    }

    /**
     * @return mixed
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

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
     * @param mixed $deals_available
     */
    public function setDealsAvailable($deals_available)
    {
        $this->deals_available = $deals_available;
    }

    /**
     * @return mixed
     */
    public function getDealsAvailable()
    {
        return $this->deals_available;
    }

    /**
     * @param mixed $delivery_fee
     */
    public function setDeliveryFee($delivery_fee)
    {
        $this->delivery_fee = $delivery_fee;
    }

    /**
     * @return mixed
     */
    public function getDeliveryFee()
    {
        return $this->delivery_fee;
    }

    /**
     * @param mixed $delivery_time
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->delivery_time = $delivery_time;
    }

    /**
     * @return mixed
     */
    public function getDeliveryTime()
    {
        return $this->delivery_time;
    }

    /**
     * @param mixed $evening_snacks
     */
    public function setEveningSnacks($evening_snacks)
    {
        $this->evening_snacks = $evening_snacks;
    }

    /**
     * @return mixed
     */
    public function getEveningSnacks()
    {
        return $this->evening_snacks;
    }

    /**
     * @param mixed $home_delivery
     */
    public function setHomeDelivery($home_delivery)
    {
        $this->home_delivery = $home_delivery;
    }

    /**
     * @return mixed
     */
    public function getHomeDelivery()
    {
        return $this->home_delivery;
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
     * @param boolean $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param boolean $is_deleted
     */
    public function setIsDeleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;
    }

    /**
     * @return boolean
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
     * @param mixed $midnight_deals
     */
    public function setMidnightDeals($midnight_deals)
    {
        $this->midnight_deals = $midnight_deals;
    }

    /**
     * @return mixed
     */
    public function getMidnightDeals()
    {
        return $this->midnight_deals;
    }

    /**
     * @param mixed $min_delivery
     */
    public function setMinDelivery($min_delivery)
    {
        $this->min_delivery = $min_delivery;
    }

    /**
     * @return mixed
     */
    public function getMinDelivery()
    {
        return $this->min_delivery;
    }

    /**
     * @param mixed $online_pay
     */
    public function setOnlinePay($online_pay)
    {
        $this->online_pay = $online_pay;
    }

    /**
     * @return mixed
     */
    public function getOnlinePay()
    {
        return $this->online_pay;
    }

    /**
     * @param mixed $open_time
     */
    public function setOpenTime($open_time)
    {
        $this->open_time = $open_time;
    }

    /**
     * @return mixed
     */
    public function getOpenTime()
    {
        return $this->open_time;
    }

    /**
     * @param mixed $phone_no
     */
    public function setPhoneNo($phone_no)
    {
        $this->phone_no = $phone_no;
    }

    /**
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->phone_no;
    }

    /**
     * @param mixed $pick_up
     */
    public function setPickUp($pick_up)
    {
        $this->pick_up = $pick_up;
    }

    /**
     * @return mixed
     */
    public function getPickUp()
    {
        return $this->pick_up;
    }

    /**
     * @param mixed $pre_order
     */
    public function setPreOrder($pre_order)
    {
        $this->pre_order = $pre_order;
    }

    /**
     * @return mixed
     */
    public function getPreOrder()
    {
        return $this->pre_order;
    }

    /**
     * @param mixed $pure_veg
     */
    public function setPureVeg($pure_veg)
    {
        $this->pure_veg = $pure_veg;
    }

    /**
     * @return mixed
     */
    public function getPureVeg()
    {
        return $this->pure_veg;
    }

    /**
     * @param mixed $restaurant_name
     */
    public function setRestaurantName($restaurant_name)
    {
        $this->restaurant_name = $restaurant_name;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->restaurant_name;
    }



    /**
     * contain only persistent values
     * @return array
     */

    public function entityFieldValue() {
    return array(
        "id"=> $this->getId(), "restaurant_name"=> $this->getRestaurantName()
        , "address1"=>$this->getAddress1(), "address2"=>$this->getAddress2()
        , "address3"=>$this->getAddress3(), "city_id"=>$this->getCityId()
        , "city_name" => $this->getCityName()
        , "phone_no" => $this->getPhoneNo()
        , "created_date" => $this->getCreatedDate()
        , "created_by" => $this->getCreatedBy(), "last_modified_by" => $this->getLastModifiedBy()
        , "last_modified_date" => $this->getLastModifiedDate()
        , "is_active" => $this->getIsActive(), "is_deleted" => $this->getIsDeleted()
        , "open_time" => $this->getOpenTime()
        , "close_time" => $this->getCloseTime(), "delivery_fee" => $this->getDeliveryFee()
        , "delivery_time" => $this->getDeliveryTime()
        , "min_delivery" => $this->getMinDelivery(), "online_pay" => $this->getOnlinePay()
        , "pure_veg" => $this->getPureVeg(), "pre_order" => $this->getPreOrder()
        , "home_delivery" => $this->getHomeDelivery(), "pick_up" => $this->getPickUp()
        , "deals_available" => $this->getDealsAvailable()
        , "midnight_deals" => $this->getMidnightDeals(), "breakfast" => $this->getBreakfast()
        , "evening_snacks" => $this->getEveningSnacks()
    );
    }


}