<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;
class SignTaskDownloadReportReq
{
    public $reportDownloadId;

    /**
     * @return mixed
     */
    public function getReportDownloadId()
    {
        return $this->reportDownloadId;
    }

    /**
     * @param mixed $reportDownloadId
     */
    public function setReportDownloadId($reportDownloadId)
    {
        $this->reportDownloadId = $reportDownloadId;
    }

}
