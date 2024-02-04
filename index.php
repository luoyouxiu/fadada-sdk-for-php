<?php

use Lyx\FadadaSdkForPhp\Client\Client;
use Lyx\FadadaSdkForPhp\Client\EUIClient;
use Lyx\FadadaSdkForPhp\Client\GetService;
use Lyx\FadadaSdkForPhp\Constants\OpenApiConfigConstants;

require "vendor/autoload.php";


$getService = new GetService();
$accessToken = $getService->getAccessToken();
$euiClient = new EUIClient(new Client(OpenApiConfigConstants::APP_ID, OpenApiConfigConstants::APP_SECRET, OpenApiConfigConstants::SERVICE_URL));

var_dump($accessToken);