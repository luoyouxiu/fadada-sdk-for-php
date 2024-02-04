<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\user;

class UserIdentInfo
{
    public $userName;

    public $userIdentType;

    public $userIdentNo;

    public $mobile;

    public $bankAccountNo;

    public $identMethod = array();

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserIdentType()
    {
        return $this->userIdentType;
    }

    /**
     * @param mixed $userIdentType
     */
    public function setUserIdentType($userIdentType)
    {
        $this->userIdentType = $userIdentType;
    }

    /**
     * @return mixed
     */
    public function getUserIdentNo()
    {
        return $this->userIdentNo;
    }

    /**
     * @param mixed $userIdentNo
     */
    public function setUserIdentNo($userIdentNo)
    {
        $this->userIdentNo = $userIdentNo;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * @param mixed $bankAccountNo
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
    }

    /**
     * @return array
     */
    public function getIdentMethod(): array
    {
        return $this->identMethod;
    }

    /**
     * @param array $identMethod
     */
    public function setIdentMethod(array $identMethod)
    {
        $this->identMethod = $identMethod;
    }

}
