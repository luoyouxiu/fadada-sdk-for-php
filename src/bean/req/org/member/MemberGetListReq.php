<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberGetListReq extends MemberBaseReq
{
    public $listFilter;

    public $listPageNo;

    public $listPageSize;


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

    /**
     * @return mixed
     */
    public function getListPageNo()
    {
        return $this->listPageNo;
    }

    /**
     * @param mixed $listPageNo
     */
    public function setListPageNo($listPageNo)
    {
        $this->listPageNo = $listPageNo;
    }

    /**
     * @return mixed
     */
    public function getListPageSize()
    {
        return $this->listPageSize;
    }

    /**
     * @param mixed $listPageSize
     */
    public function setListPageSize($listPageSize)
    {
        $this->listPageSize = $listPageSize;
    }


}
