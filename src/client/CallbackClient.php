<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\callback\GetCallBackListReq;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class CallbackClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询回调列表
    function getCallbackList($accessToken, GetCallBackListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::GET_CALL_BACK_LIST);
    }

}
