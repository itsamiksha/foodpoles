<?php
/**
 * User: STG
 * Date: 11/12/14
 * Time: 12:22 PM
 */

require_once'AuthInit.php';

class UserAuth{

    private $googleClient;
    private $auth;

    function __construct(){
        $this->googleClient = new Google_Client;
        $this->auth = new GoogleAuth($this->googleClient);
    }

    public function isLoggedIn(){
        return $this->auth->isLoggedIn();
    }
    public function getAuthUrl(){
        return $this->auth->getAuthUrl();
    }
    public function getUserInfo(){
        $user_info = $this->auth->getPayLoad();
        return $user_info;
    }
    public function checkRedirectCode(){
        return $this->auth->checkRedirectCode();
    }


}