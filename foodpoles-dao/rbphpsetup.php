<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 29/10/14
 * Time: 10:34 PM
 */

/*require'redbeanphp4/rb.php';
require'../foodpoles-utility/entity/Restaurant.php';

$dbHost = 'localhost';
$dbName = 'rbtest';
$dbUser = 'root';
$dbUserPassword = '';
$freezeTable = 'FALSE';

$restaurant = new Restaurant();
$restaurant->setName('Safari');
$restaurant->setAddress1('Gopal Pura');
$restaurant->setAddress2('Near Riddhi Siddhi');
$restaurant->setCityId('1234');


R::setup('mysql:host='.$dbHost.';dbname='.$dbName,$dbUser,$dbUserPassword);
//R::freeze($freezeTable);

$tableName = 'restaurant';


$tableCont= R::dispense($tableName);

$tableCont->name = $restaurant->getName();
$tableCont->address1 = $restaurant->getAddress1();
$tableCont->address2 = $restaurant->getAddress2();
$tableCont->cityId = $restaurant->getCityId();

try{
    R::store($tableCont);
    echo 'New Row Added';
}
catch(Exception $e) {
    echo $e;
}
*/
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
$restaurant->setName('Safari');
$restaurant->setAddress1('Gopal Pura');
$restaurant->setAddress2('Near Riddhi Siddhi');
$restaurant->setCityId('1234');

$restService->create($restaurant);
