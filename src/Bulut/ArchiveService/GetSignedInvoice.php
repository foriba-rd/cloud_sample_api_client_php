<?php

namespace Bulut\ArchiveService;

class GetSignedInvoice
{
    public $soapAction = "getSignedInvoice";
    public $methodName = "getSignedInvoiceRequestType";
    public $prefix = false;
    public $namespace = "";

    public $UUID;
    public $vkn;
    public $invoiceNumber;
    public $custInvID;

    /**
     * @param mixed $UUID
     */
    public function setUUID($UUID)
    {
        $this->UUID = $UUID;
    }

    /**
     * @param mixed $vkn
     */
    public function setVkn($vkn)
    {
        $this->vkn = $vkn;
    }

    /**
     * @param mixed $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @param mixed $custInvID
     */
    public function setCustInvID($custInvID)
    {
        $this->custInvID = $custInvID;
    }





}