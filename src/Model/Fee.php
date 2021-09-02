<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to display fees that are automatically deducted from seller
 * payouts.
 */
class Fee extends AbstractModel
{
    /**
     * The amount of the fee.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $amount = null;

    /**
     * A description of the fee that was deducted from the seller payout.
     *
     * @var string
     */
    public $feeMemo = null;

    /**
     * The enumeration value returned here indicates the type of fee that was deducted
     * from the seller payout. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $feeType = null;
}
