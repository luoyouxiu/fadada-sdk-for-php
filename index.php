<?php

use LuoYouXiu\FadadaSdkForPhp\Client\Client;
use LuoYouXiu\FadadaSdkForPhp\Client\EUIClient;
use LuoYouXiu\FadadaSdkForPhp\Client\GetService;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiConfigConstants;

require "vendor/autoload.php";


$getService = new GetService();
$accessToken = $getService->getAccessToken();
$euiClient = new EUIClient(new Client(OpenApiConfigConstants::APP_ID, OpenApiConfigConstants::APP_SECRET, OpenApiConfigConstants::SERVICE_URL));

var_dump($accessToken);