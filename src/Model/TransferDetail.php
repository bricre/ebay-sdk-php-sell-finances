<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the transferDetail container, which provides more details
 * about the transfer and the charge(s) associated with the transfer.
 */
class TransferDetail extends AbstractModel
{
    /**
     * This container shows the seller payout balance that will be applied toward the
     * charges outlined in the charges array.
     *
     * @var \Ebay\Sell\Finances\Model\BalanceAdjustment
     */
    public $balanceAdjustment = null;

    /**
     * This container is an array of one or more charges related to the transfer.
     * Charges can be related to an order cancellation, order return, case, payment
     * dispute, etc.
     *
     * @var \Ebay\Sell\Finances\Model\Charge[]
     */
    public $charges = null;

    /**
     * This container shows the total amount that the seller owes for all of the
     * charges outlined in the charges array.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $totalChargeNetAmount = null;
}
