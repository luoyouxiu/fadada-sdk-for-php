<?php


namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
class CreateActor
{
    public $actor;

    public $fillFields;

    public $signFields;

    public $signConfigInfo;

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param mixed $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getFillFields()
    {
        return $this->fillFields;
    }

    /**
     * @param mixed $fillFields
     */
    public function setFillFields($fillFields)
    {
        $this->fillFields = $fillFields;
    }

    /**
     * @return mixed
     */
    public function getSignFields()
    {
        return $this->signFields;
    }

    /**
     * @param mixed $signFields
     */
    public function setSignFields($signFields)
    {
        $this->signFields = $signFields;
    }

    /**
     * @return mixed
     */
    public function getSignConfigInfo()
    {
        return $this->signConfigInfo;
    }

    /**
     * @param mixed $signConfigInfo
     */
    public function setSignConfigInfo($signConfigInfo)
    {
        $this->signConfigInfo = $signConfigInfo;
    }


}
