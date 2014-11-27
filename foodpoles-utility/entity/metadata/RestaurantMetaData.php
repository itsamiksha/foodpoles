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
    const entityClass = "Restaurant";

    const COL_RESTAURANT_ID = "id";
    const COL_RESTAURANT_NAME = "restaurant_name";
    const COL_RESTAURANT_ADDRESS1 = "address1";
    const COL_RESTAURANT_ADDRESS2 = "address2";
    const COL_RESTAURANT_ADDRESS3 = "address3";
    const COL_RESTAURANT_CITY_ID = "city_id";
    const COL_RESTAURANT_CITY_NAME = "city_name";
    const COL_RESTAURANT_PHONE_NO = "phone_no";
    const COL_RESTAURANT_CREATED_DATE = "created_date";
    const COL_RESTAURANT_CREATED_BY = "created_by";
    const COL_RESTAURANT_LAST_MODIFIED_DATE = "last_modified_date";
    const COL_RESTAURANT_LAST_MODIFIED_BY = "last_modified_by";
    const COL_RESTAURANT_IS_ACTIVE = "is_active";
    const COL_RESTAURANT_IS_DELETED = "is_deleted";
    /*
     * filters
     */
    const COL_RESTAURANT_OPEN_TIME = "open_time";
    const COL_RESTAURANT_CLOSE_TIME = "close_time";
    const COL_RESTAURANT_DELIVERY_FEE = "delivery_fee";
    const COL_RESTAURANT_DELIVERY_TIME = "delivery_time";
    const COL_RESTAURANT_MIN_DELIVERY = "min_delivery";
    const COL_RESTAURANT_ONLINE_PAY = "online_pay";
    const COL_RESTAURANT_PURE_VEG = "pure_veg";
    const COL_RESTAURANT_PRE_ORDER = "pre_order";
    const COL_RESTAURANT_HOME_DELIVERY = "home_delivery";
    const COL_RESTAURANT_PICK_UP = "pick_up";
    const COL_RESTAURANT_DEALS_AVAILABLE = "deals_available";
    const COL_RESTAURANT_MIDNIGHT_DEALS = "midnight_deals";
    const COL_RESTAURANT_BREAKFAST = "breakfast";
    const COL_RESTAURANT_EVENING_SNACKS = "evening_snacks";

    public function __construct(){
        parent::__construct(self::ENTITY_NAME, self::entityClass);
    }

    protected function initialize(){
        parent::addColumnMetaData(self::COL_RESTAURANT_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_RESTAURANT_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
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
