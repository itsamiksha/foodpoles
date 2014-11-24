<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 22/11/14
 * Time: 10:59 AM
 */

abstract class AbstractMetaData{
    private $entityName;
    private $entityClass;
    protected $columnMap;


    protected abstract function initialize();

    protected function __construct($entityName, $entityClass){
        $this->entityName = $entityName;
        $this->entityClass = $entityClass;
        $this->columnMap = array(); // stores column name as key corresponding to column type as value

        $this->initialize();
    }

    protected function addColumnMetaData($columnName, $columnType){
        $this->columnMap[$columnName] = $columnType;
    }


    public function getEntityName(){
        return $this->entityName;
    }

    public function getEntityClass(){
        return $this->entityClass;
    }

    public function getAllColumns(){
        return $this->columnMap;
    }

}