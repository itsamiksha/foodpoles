<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 29/10/14
 * Time: 10:34 PM
 */


require'../foodpoles-utility/entity/Set.php';
require 'impl/SetDaoImpl.php';



class SetService{

    private $setDao;

    public function setSetDao($setDao)
    {
        $this->setDao = $setDao;
    }

    public function getSetDao()
    {
        return $this->setDao;
    }


    public function create($set){
        $this->setDao->create($set);
    }

    public function getById($id, $entityName){
        return $this->setDao->getById($id, $entityName);
    }

    public function getAll( $entityName){
        return $this->setDao->getAll($entityName);
    }

    public function update( $set){
        return $this->setDao->update($set);
    }

    public function getByName($setName){
        return $this->setDao->getByName($setName);
    }
}

$setDaoImpl = new SetDaoImpl();
$setService = new SetService();
$set = new Set();
$set->setSetName("Area");
//$set->setId(6);
$set->setParentSetId(4);
$set->setSetNameUpperCase(strtoupper($set->getSetName()));
$set->setCreatedBy("Admin");
$set->setIsActive(true);
$set->setIsDeleted(false);

$setService->setSetDao(new SetDaoImpl());
$setService->create($set);
//$setService->update($set);
//$temp = $setService->getByName('country');

//print_r(json_encode($temp->getProperties()));

/*

require'../foodpoles-utility/entity/Restaurant.php';
require 'impl/RestaurantDaoImpl.php';

class RestaurantService{

    // RestaurantDao $restaurantDao;

    public function __construct(RestaurantDao $restaurantDao){
        $this->restaurantDao = $restaurantDao;
    }

    public function create($restaurant){
        $this->restaurantDao->create($restaurant);
    }
}

$restaurantDaoImpl = new RestaurantDaoImpl();
$restService = new RestaurantService($restaurantDaoImpl);
$restaurant = new Restaurant();
$restaurant->setRestaurantName('Safari');
$restaurant->setAddress1('Gopal Pura');
$restaurant->setAddress2('Near Riddhi Siddhi');
$restaurant->setCityId('1234');
$restaurant->setBreakfast(true);
$restaurant->setCityName('Jaipur');
$restaurant->setCreatedBy('Admin');
$restaurant->setDeliveryFee(150);
$restaurant->setEveningSnacks(true);

$restService->create($restaurant);*/
