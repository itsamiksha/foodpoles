<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 24/11/14
 * Time: 5:59 PM
 */

require_once('AbstractMetaData.php');
require_once('ColumnMetaData.php');

class SetMetaData extends AbstractMetaData{

    const ENTITY_NAME = "Set";
    const entityClass = "Set";

    const COL_SET_ID = "id";
    const COL_SET_NAME = "set_name";
    const COL_SET_NAME_UPPER_CASE = "set_name_upper_case";
    const COL_PARENT_SET_ID = "parent_set_id";
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
        parent::addColumnMetaData(self::COL_SET_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_SET_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_SET_NAME_UPPER_CASE, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_PARENT_SET_ID, ColumnMetaData::COLUMN_TYPE_INT);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_CREATED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_CREATED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_IS_DELETED, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_IS_ACTIVE, ColumnMetaData::COLUMN_TYPE_BOOLEAN);

    }

}