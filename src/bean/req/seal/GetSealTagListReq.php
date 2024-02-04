<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\seal;
class GetSealTagListReq
{
    public $openCorpId;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId) 
    {
        $this->openCorpId = $openCorpId;
    }


}
