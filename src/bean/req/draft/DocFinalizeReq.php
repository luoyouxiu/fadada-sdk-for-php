<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\draft;
class DocFinalizeReq
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
