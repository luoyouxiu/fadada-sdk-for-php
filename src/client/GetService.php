<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiConfigConstants;

class GetService
{
    private $APP_ID;
    private $APP_SECRET;
    private $SERVICE_URL;

    public function __construct($APP_ID, $APP_SECRET, $SERVICE_URL)
    {
        //初始化
        $this->APP_ID = $APP_ID;
        $this->APP_SECRET = $APP_SECRET;
        $this->SERVICE_URL = $SERVICE_URL;
    }

    function getAccessToken(){
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client($this->APP_ID, $this->APP_SECRET,$this->SERVICE_URL));
        $response = $serviceClient->getAccessToken();
        $res = json_decode($response);
        return $res->data->accessToken;
    }

    function getAppAccessTicket(){
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client($this->APP_ID, $this->APP_SECRET,$this->SERVICE_URL));
        $response = $serviceClient->getAppAccessTicket();
        $res = json_decode($response);
        return $res->data->accessToken;
    }

    function getUserAccessTicket(){
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client($this->APP_ID, $this->APP_SECRET,$this->SERVICE_URL));
        $response = $serviceClient->getUserAccessTicket();
        $res = json_decode($response);
        return $res->data->accessToken;
    }
}
