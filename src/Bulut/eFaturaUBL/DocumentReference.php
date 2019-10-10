<?php

namespace Bulut\eFaturaUBL;


class DocumentReference
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |String
     */
    public $IssueDate;

    /**
     * @var |String
     */
    public $DocumentTypeCode;

    /**
     * @var |String
     */
    public $DocumentType;

    /**
     * @var |String
     */
    public $DocumentDescription;

    /**
     * @var |Bulut|eFaturaUBL|Attachment
     */
    public $Attachment;


}