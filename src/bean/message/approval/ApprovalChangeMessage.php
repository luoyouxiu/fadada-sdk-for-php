<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\message\approval;

/**
 * 审批变更事件
 * 当企业审批操作人进行审批后，通过该事件回调给业务系统，事件ID：approval-change
 */
class ApprovalChangeMessage extends MessageBase
{
    public $openCorpId;
    public $approvalType;
    public $templateId;
    public $signTaskId;
    public $approvalId;
    public $approvalStatus;
    public $oprMemberId;
    public $oprMemberName;
    public $approverStatus;
    public $note;
    public $nextNodeMemberIds;
    public $clientUserId;

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
    public function getApprovalType()
    {
        return $this->approvalType;
    }

    /**
     * @param mixed $approvalType
     */
    public function setApprovalType($approvalType) 
    {
        $this->approvalType = $approvalType;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId) 
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getSignTaskId()
    {
        return $this->signTaskId;
    }

    /**
     * @param mixed $signTaskId
     */
    public function setSignTaskId($signTaskId) 
    {
        $this->signTaskId = $signTaskId;
    }

    /**
     * @return mixed
     */
    public function getApprovalId()
    {
        return $this->approvalId;
    }

    /**
     * @param mixed $approvalId
     */
    public function setApprovalId($approvalId) 
    {
        $this->approvalId = $approvalId;
    }

    /**
     * @return mixed
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * @param mixed $approvalStatus
     */
    public function setApprovalStatus($approvalStatus) 
    {
        $this->approvalStatus = $approvalStatus;
    }

    /**
     * @return mixed
     */
    public function getOprMemberId()
    {
        return $this->oprMemberId;
    }

    /**
     * @param mixed $oprMemberId
     */
    public function setOprMemberId($oprMemberId) 
    {
        $this->oprMemberId = $oprMemberId;
    }

    /**
     * @return mixed
     */
    public function getOprMemberName()
    {
        return $this->oprMemberName;
    }

    /**
     * @param mixed $oprMemberName
     */
    public function setOprMemberName($oprMemberName) 
    {
        $this->oprMemberName = $oprMemberName;
    }

    /**
     * @return mixed
     */
    public function getApproverStatus()
    {
        return $this->approverStatus;
    }

    /**
     * @param mixed $approverStatus
     */
    public function setApproverStatus($approverStatus) 
    {
        $this->approverStatus = $approverStatus;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note) 
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNextNodeMemberIds()
    {
        return $this->nextNodeMemberIds;
    }

    /**
     * @param mixed $nextNodeMemberIds
     */
    public function setNextNodeMemberIds($nextNodeMemberIds) 
    {
        $this->nextNodeMemberIds = $nextNodeMemberIds;
    }

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId) 
    {
        $this->clientUserId = $clientUserId;
    }

}
