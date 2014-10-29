<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 29/10/14
 * Time: 10:34 PM
 */

require 'redbeanphp4/rb.php';
R::setup();

R::setup('mysql:host=localhost;dbname=mydatabase',
    'user','password');