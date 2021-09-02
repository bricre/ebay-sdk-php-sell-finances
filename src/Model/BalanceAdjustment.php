<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the balanceAdjustment container, which shows the seller
 * payout balance that will be applied toward the charges outlined in the charges
 * array.
 */
class BalanceAdjustment extends AbstractModel
{
    /**
     * The seller payout balance amount that will be applied toward the charges
     * outlined in the charges array.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $adjustmentAmount = null;

    /**
     * The enumeration value returned here indicates if the charge is a DEBIT or a
     * CREDIT to the seller. Generally, all transfer transaction types are going to be
     * DEBIT, since the money is being tranferred from the seller to eBay. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $adjustmentType = null;
}
