<?php

use LuoYouXiu\FadadaSdkForPhp\Client\Client;
use LuoYouXiu\FadadaSdkForPhp\Client\EUIClient;
use LuoYouXiu\FadadaSdkForPhp\Client\GetService;

require "vendor/autoload.php";


#基础参数对象
$OpenApiConfigConstants = (object)[
    'APP_ID' => '',
    'APP_SECRET'=>'',
    'SERVICE_URL' => ''
];
#实例化服务对象
$getService = new GetService($OpenApiConfigConstants->APP_ID,$OpenApiConfigConstants->APP_SECRET, $OpenApiConfigConstants->SERVICE_URL);
#获取token
$accessToken = $getService->getAccessToken();
#实例化客户端对象
$euiClient = new EUIClient(new Client($OpenApiConfigConstants->APP_ID,$OpenApiConfigConstants->APP_SECRET, $OpenApiConfigConstants->SERVICE_URL));
#其他操作
var_dump($accessToken);