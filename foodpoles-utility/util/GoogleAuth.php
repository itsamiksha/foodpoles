<?php
/**
 * User: STG
 * Date: 5/11/14
 * Time: 4:41 AM
 */

class GoogleAuth {

    protected $client;
    public function __construct(Google_Client $googleClient = null){
        $a = 0;
        $this->client = $googleClient;
        if($this->client){
            $this->client->setClientId('631498030896-68v1ebl3qfg8emen2rpubmuet57kcajj.apps.googleusercontent.com');
            $this->client->setClientSecret('9xCCQb4LcVrQ_X28BtEdQNNh');
            if($a == 1){
                $this->client->setRedirectUri('http://localhost:8088/foodpoles/foodpoles-dao/test.html');
            }else{
                $this->client->setRedirectUri('http://localhost:8088/foodpoles/foodpoles-dao/Test.php');
            }
            $this->client->setScopes('email');
        }
    }

    public function isLoggedIn(){
        return isset($_SESSION['access_token']);
    }

    public function getAuthUrl(){
        return $this->client->createAuthUrl();
    }

    public function checkRedirectCode(){
        if(isset($_GET['code'])){
            $this->client->authenticate($_GET['code']);
            $this->setToken($this->client->getAccessToken());

            $this->setPayLoad();
            $payload = $this->getPayLoad();

            //print_r($payload);
            return true;
        }
        return false;
    }

    public function setToken($token){
        $_SESSION['access_token'] = $token;
        $this->client->setAccessToken($token);
    }

    public function getPayLoad(){
        //$payload = $this->client->verifyIdToken()->getAttributes();
        //return $payload;
        return $_SESSION['pay_load'];
    }

    public function setPayLoad(){
        $_SESSION['pay_load'] = $this->client->verifyIdToken()->getAttributes();
    }
} 