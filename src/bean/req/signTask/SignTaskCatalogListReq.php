<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;


class SignTaskCatalogListReq
{
    public $ownerId;

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }


}
