<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\seal;
require_once '../seal/SealBaseReq.php';
class CreatePersonalSealByImageReq extends SealBaseReq
{
    public $openUserId;
    public $sealImage;
    public $sealName;
    public $sealWidth;
    public $sealHeight;
    public $sealOldStyle;
    public $sealColor;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId) 
    {
        $this->openUserId = $openUserId;
    }

    /**
     * @return mixed
     */
    public function getSealImage()
    {
        return $this->sealImage;
    }

    /**
     * @param mixed $sealImage
     */
    public function setSealImage($sealImage) 
    {
        $this->sealImage = $sealImage;
    }

    /**
     * @return mixed
     */
    public function getSealName()
    {
        return $this->sealName;
    }

    /**
     * @param mixed $sealName
     */
    public function setSealName($sealName) 
    {
        $this->sealName = $sealName;
    }

    /**
     * @return mixed
     */
    public function getSealWidth()
    {
        return $this->sealWidth;
    }

    /**
     * @param mixed $sealWidth
     */
    public function setSealWidth($sealWidth) 
    {
        $this->sealWidth = $sealWidth;
    }

    /**
     * @return mixed
     */
    public function getSealHeight()
    {
        return $this->sealHeight;
    }

    /**
     * @param mixed $sealHeight
     */
    public function setSealHeight($sealHeight) 
    {
        $this->sealHeight = $sealHeight;
    }

    /**
     * @return mixed
     */
    public function getSealOldStyle()
    {
        return $this->sealOldStyle;
    }

    /**
     * @param mixed $sealOldStyle
     */
    public function setSealOldStyle($sealOldStyle) 
    {
        $this->sealOldStyle = $sealOldStyle;
    }

    /**
     * @return mixed
     */
    public function getSealColor()
    {
        return $this->sealColor;
    }

    /**
     * @param mixed $sealColor
     */
    public function setSealColor($sealColor) 
    {
        $this->sealColor = $sealColor;
    }

}
