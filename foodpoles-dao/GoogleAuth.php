<?php
/**
 * Created by PhpStorm.
 * User: STG
 * Date: 5/11/14
 * Time: 4:41 AM
 */

class GoogleAuth {

    protected $client;
    public function __construct(Google_Client $googleClient = null){
        $this->client = $googleClient;
        if($this->client){
            $this->client->setClientId('631498030896-68v1ebl3qfg8emen2rpubmuet57kcajj.apps.googleusercontent.com');
            $this->client->setClientSecret('9xCCQb4LcVrQ_X28BtEdQNNh');
            $this->client->setRedirectUri('http://localhost/foodpoles/index.php');
            //$this->client->setScopes('');
        }
    }
} 