<?php
/**
 * User: STG
 * Date: 27/11/14
 * Time: 11:49 AM
 */

require_once('AbstractMetaData.php');
require_once('ColumnMetaData.php');


class ValueMetaData extends AbstractMetaData{

    const ENTITY_NAME = "Value";
    const entityClass = "Value";

    const COL_VALUE_ID = "id";
    const COL_SET_ID = "set_id";
    const COL_VALUE_NAME = "value";
    const COL_VALUE_UPPER_CASE = "value_upper_case";
    const COL_PARENT_VALUE_ID = "parent_value_id";
    const COL_LAST_MODIFIED_DATE = "last_modified_date";
    const COL_LAST_MODIFIED_BY = "last_modified_by";
    const COL_CREATED_DATE = "created_date";
    const COL_CREATED_BY = "created_by";
    const COL_IS_DELETED = "is_deleted";
    const COL_IS_ACTIVE = "is_active";

    public function __construct(){
        parent::__construct(self::ENTITY_NAME, self::entityClass);
    }

    protected function initialize(){
        parent::addColumnMetaData(self::COL_VALUE_ID, ColumnMetaData::COLUMN_TYPE_BIG_INT);
        parent::addColumnMetaData(self::COL_SET_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_VALUE_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_VALUE_UPPER_CASE, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_PARENT_VALUE_ID, ColumnMetaData::COLUMN_TYPE_BIG_INT);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_CREATED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_CREATED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_IS_DELETED, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_IS_ACTIVE, ColumnMetaData::COLUMN_TYPE_BOOLEAN);

    }
}