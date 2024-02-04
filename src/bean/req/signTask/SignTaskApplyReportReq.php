<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;
use SignTaskBaseReq;

require_once '../signTask/SignTaskBaseReq.php';
class SignTaskApplyReportReq extends SignTaskBaseReq
{
    public $fileId;

    public $ownerId;

    public $reportType;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

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

    /**
     * @return mixed
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * @param mixed $reportType
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
    }
}
