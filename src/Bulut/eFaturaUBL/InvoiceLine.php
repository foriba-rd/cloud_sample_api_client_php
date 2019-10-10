<?php

namespace Bulut\eFaturaUBL;


class InvoiceLine
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |String
     */
    public $InvoicedQuantity;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $LineExtensionAmount;

    /**
     * @var |Bulut|eFaturaUBL|Item
     */
    public $Item;

    /**
     * @var |Bulut|eFaturaUBL|Price
     */
    public $Price;

    /**
     * @var |Bulut|eFaturaUBL|AllowanceCharge
     */
    public $AllowanceCharge;

    /**
     * @var |Bulut|eFaturaUBL|TaxTotal
     */
    public $TaxTotal;

    /**
     * @var Array
     */
    public $Note;


}