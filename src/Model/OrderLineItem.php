<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to show the fees that are deducted from a seller payout for
 * each line item in an order.
 */
class OrderLineItem extends AbstractModel
{
    /**
     * This is the total amount of fees accrued for the order line item and deducted
     * from a seller payout. All of the fees under the marketplaceFees container should
     * equal this amount.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $feeBasisAmount = null;

    /**
     * The unique identifier of an order line item.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * An array of all fees accrued for the order line item and deducted from a seller
     * payout.
     *
     * @var \Ebay\Sell\Finances\Model\Fee[]
     */
    public $marketplaceFees = null;
}
