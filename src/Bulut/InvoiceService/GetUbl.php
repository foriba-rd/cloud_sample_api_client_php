<?php

namespace Bulut\InvoiceService;


class GetUbl
{
    public $soapAction = "getUBL";
    public $methodName = "getUBLRequest";
    public $Identifier;
    public $VKN_TCKN;
    public $UUID;
    public $DocType;
    public $Type;
    public $Parameters;

    /**
     * @param mixed $Identifier
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;
    }

    /**
     * @param mixed $VKN_TCKN
     */
    public function setVKNTCKN($VKN_TCKN)
    {
        $this->VKN_TCKN = $VKN_TCKN;
    }

    /**
     * @param mixed $UUID
     */
    public function setUUID($UUID)
    {
        $this->UUID = $UUID;
    }

    /**
     * @param mixed $DocType
     */
    public function setDocType($DocType)
    {
        $this->DocType = $DocType;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @param mixed $Parameters
     */
    public function setParameters($Parameters)
    {
        $this->Parameters = $Parameters;
    }


}
