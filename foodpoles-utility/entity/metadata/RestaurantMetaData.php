<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 23/11/14
 * Time: 12:24 PM
 */
require_once('AbstractMetaData.php');
require_once('ColumnMetaData.php');
//require_once('../Restaurant.php');

class RestaurantMetaData extends AbstractMetaData{

    const ENTITY_NAME = "Restaurant";
    const entityClass = "Resaurant";

    const COL_RESTAURANT_ID = "id";
    const COL_RESTAURANT_NAME = "name";
    const COL_RESTAURANT_ADDRESS1 = "address1";
    const COL_RESTAURANT_ADDRESS2 = "address2";
    const COL_RESTAURANT_ADDRESS3 = "address3";
    const COL_RESTAURANT_CITY_ID = "cityId";
    const COL_RESTAURANT_CITY_NAME = "cityName";
    const COL_RESTAURANT_PHONE_NO = "phoneNo";
    const COL_RESTAURANT_CREATED_DATE = "createdDate";
    const COL_RESTAURANT_CREATED_BY = "createdBy";
    const COL_RESTAURANT_LAST_MODIFIED_DATE = "lastModifiedDate";
    const COL_RESTAURANT_LAST_MODIFIED_BY = "lastModifiedBy";
    const COL_RESTAURANT_IS_ACTIVE = "isActive";
    const COL_RESTAURANT_IS_DELETED = "isDeleted";
    /*
     * filters
     */
    const COL_RESTAURANT_OPEN_TIME = "openTime";
    const COL_RESTAURANT_CLOSE_TIME = "closeTime";
    const COL_RESTAURANT_DELIVERY_FEE = "deliveryFee";
    const COL_RESTAURANT_DELIVERY_TIME = "deliveryTime";
    const COL_RESTAURANT_MIN_DELIVERY = "minDelivery";
    const COL_RESTAURANT_ONLINE_PAY = "onlinePay";
    const COL_RESTAURANT_PURE_VEG = "pureVeg";
    const COL_RESTAURANT_PRE_ORDER = "preOrder";
    const COL_RESTAURANT_HOME_DELIVERY = "homeDelivery";
    const COL_RESTAURANT_PICK_UP = "pickUp";
    const COL_RESTAURANT_DEALS_AVAILABLE = "dealsAvailable";
    const COL_RESTAURANT_MIDNIGHT_DEALS = "midnightDeals";
    const COL_RESTAURANT_BREAKFAST = "breakfast";
    const COL_RESTAURANT_EVENING_SNACKS = "eveningSnacks";

    public function __construct(){
        parent::__construct(self::ENTITY_NAME, self::entityClass);
    }

    protected function initialize(){
        parent::addColumnMetaData(self::COL_RESTAURANT_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_RESTAURANT_ADDRESS1, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_ADDRESS2, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_ADDRESS3, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_CITY_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_RESTAURANT_CITY_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_PHONE_NO, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_CREATED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_RESTAURANT_CREATED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_LAST_MODIFIED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_RESTAURANT_LAST_MODIFIED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_RESTAURANT_IS_ACTIVE, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_IS_DELETED, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_OPEN_TIME, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_RESTAURANT_CLOSE_TIME, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_RESTAURANT_DELIVERY_FEE, ColumnMetaData::COLUMN_TYPE_DOUBLE);
        parent::addColumnMetaData(self::COL_RESTAURANT_DELIVERY_TIME, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_RESTAURANT_MIN_DELIVERY, ColumnMetaData::COLUMN_TYPE_DOUBLE);
        parent::addColumnMetaData(self::COL_RESTAURANT_ONLINE_PAY, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_PURE_VEG, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_PRE_ORDER, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_HOME_DELIVERY, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_PICK_UP, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_DEALS_AVAILABLE, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_MIDNIGHT_DEALS, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_BREAKFAST, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_RESTAURANT_EVENING_SNACKS, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
    }
}
