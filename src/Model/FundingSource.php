<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type provided details on the funding source for the transfer.
 */
class FundingSource extends AbstractModel
{
    /**
     * The brand name of the credit card or the name of the financial institution that
     * is the source of payment. This field may not be populated for other funding
     * sources.
     *
     * @var string
     */
    public $brand = null;

    /**
     * This field provides a note about the funding source. If the seller's credit card
     * or bank account is the funding source, this field might contain the last four
     * digits of the credit card or bank account. This field may also be returned as
     * null.
     *
     * @var string
     */
    public $memo = null;
}
