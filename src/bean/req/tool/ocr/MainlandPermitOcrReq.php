<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\tool\ocr;

class MainlandPermitOcrReq
{
    public $imageBase64;

    /**
     * @return mixed
     */
    public function getImageBase64()
    {
        return $this->imageBase64;
    }

    /**
     * @param mixed $imageBase64
     */
    public function setImageBase64($imageBase64)
    {
        $this->imageBase64 = $imageBase64;
    }

}
