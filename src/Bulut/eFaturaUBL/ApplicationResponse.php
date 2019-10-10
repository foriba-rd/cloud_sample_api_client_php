<?php

namespace Bulut\eFaturaUBL;

class ApplicationResponse
{
    /**
     * @var |String
     */
    public $UBLVersionID;

    /**
     * @var |String
     */
    public $CustomizationID;

    /**
     * @var |String
     */
    public $ProfileID;

    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |String
     */
    public $CopyIndicator;

    /**
     * @var |String
     */
    public $UUID;

    /**
     * @var |String
     */
    public $IssueDate;

    /**
     * @var |String
     */
    public $IssueTime;

    /**
     * @var |Array
     */
    public $Note;


    /**
     * @var |Bulut|eFaturaUBL|SenderParty
     */
    public $SenderParty;

    /**
     * @var |Bulut|eFaturaUBL|ReceiverParty
     */
    public $ReceiverParty;

    /**
     * @var |Bulut|eFaturaUBL|DocumentResponse
     */
    public $DocumentResponse;

}