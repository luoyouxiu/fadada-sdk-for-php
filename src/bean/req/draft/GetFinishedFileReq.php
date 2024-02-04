<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\draft;
class GetFinishedFileReq
{
    public $contractConsultId;

    /**
     * @return mixed
     */
    public function getContractConsultId()
    {
        return $this->contractConsultId;
    }

    /**
     * @param mixed $contractConsultId
     */
    public function setContractConsultId($contractConsultId)
    {
        $this->contractConsultId = $contractConsultId;
    }

}
