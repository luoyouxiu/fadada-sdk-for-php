<?php

use LuoYouXiu\FadadaSdkForPhp\Client\Client;
use LuoYouXiu\FadadaSdkForPhp\Client\EUIClient;
use LuoYouXiu\FadadaSdkForPhp\Client\GetService;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiConfigConstants;

require "vendor/autoload.php";

#实例化服务对象
$getService = new GetService();
#获取token
$accessToken = $getService->getAccessToken();
#实例化基础参数对象
$OpenApiConfigConstants = new OpenApiConfigConstants('app_id', 'app_secret', 'service_url');
#实例化客户端对象
$euiClient = new EUIClient(new Client($OpenApiConfigConstants->APP_ID,$OpenApiConfigConstants->APP_SECRET, $OpenApiConfigConstants->SERVICE_URL));
#其他操作
var_dump($accessToken);