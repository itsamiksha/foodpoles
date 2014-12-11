<?php
/**
 * User: STG
 * Date: 23/11/14
 * Time: 9:06 PM
 */
require_once'/../foodpoles-utility/util/UserAuth.php';

class Test{

    public function a(){
        echo "Hello";
    }


}


$test = new Test();
$test->a();

$user = new UserAuth();
$user->checkRedirectCode();
echo '<pre>', print_r($user->getUserInfo()), '</pre>';