<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 6/12/14
 * Time: 11:37 AM
 */
if (!isset($_SESSION))
{
    session_start();
}
session_destroy();
header('Location:Test.php');