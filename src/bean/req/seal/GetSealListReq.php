<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\seal;
class GetSealListReq
{
    public $openCorpId;

    public $grantFreeSign;

    public $listFilter;

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

    /**
     * @return mixed
     */
    public function getGrantFreeSign()
    {
        return $this->grantFreeSign;
    }

    /**
     * @param mixed $grantFreeSign
     */
    public function setGrantFreeSign($grantFreeSign) 
    {
        $this->grantFreeSign = $grantFreeSign;
    }

    /**
     * @return mixed
     */
    public function getListFilter()
    {
        return $this->listFilter;
    }

    /**
     * @param mixed $listFilter
     */
    public function setListFilter($listFilter)
    {
        $this->listFilter = $listFilter;
    }


}