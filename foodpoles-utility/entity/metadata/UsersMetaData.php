<?php
/**
 * User: STG
 * Date: 8/12/14
 * Time: 3:28 PM
 */

require_once('AbstractMetaData.php');
require_once('ColumnMetaData.php');

class UsersMetaData extends AbstractMetaData{
    const ENTITY_NAME = "Users";
    const entityClass = "Users";

    const COL_ID = "id";
    const COL_DISPLAY_NAME = "display_name";
    const COL_FIRST_NAME = "first_name";
    const COL_LAST_NAME = "last_name";
    const COL_USER_ROLE = "user_role";
    const COL_EMAIL_ID = "email_id";
    const COL_PASSWORD = "password";
    const COL_CREATED_BY = "created_by";
    const COL_CREATED_DATE = "created_date";
    const COL_LAST_MODIFIED_BY = "last_modified_by";
    const COL_LAST_MODIFIED_DATE = "last_modified_date";
    const COL_IS_ACTIVE = "is_active";
    const COL_IS_DELETED = "is_deleted";

    public function __construct(){
        parent::__construct(self::ENTITY_NAME, self::entityClass);
    }

    protected function initialize(){
        parent::addColumnMetaData(self::COL_ID, ColumnMetaData::COLUMN_TYPE_BIG_INT);
        parent::addColumnMetaData(self::COL_DISPLAY_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_FIRST_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_LAST_NAME, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_USER_ROLE, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_EMAIL_ID, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_PASSWORD, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_CREATED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_CREATED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_BY, ColumnMetaData::COLUMN_TYPE_VARCHAR);
        parent::addColumnMetaData(self::COL_LAST_MODIFIED_DATE, ColumnMetaData::COLUMN_TYPE_DATE);
        parent::addColumnMetaData(self::COL_IS_ACTIVE, ColumnMetaData::COLUMN_TYPE_BOOLEAN);
        parent::addColumnMetaData(self::COL_IS_DELETED, ColumnMetaData::COLUMN_TYPE_BOOLEAN);

    }
}