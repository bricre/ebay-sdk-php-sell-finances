<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type provides details about the seller's account that received (or is
 * scheduled to receive) a payout.
 */
class PayoutInstrument extends AbstractModel
{
    /**
     * This string value is the last four digits of the seller's account number.
     *
     * @var string
     */
    public $accountLastFourDigits = null;

    /**
     * This string value indicates the type of account that received the payout. At
     * this time, seller payouts can only be distributed to bank acounts, so the string
     * value returned in this field will always be BankAccount.
     *
     * @var string
     */
    public $instrumentType = null;

    /**
     * This string value is a seller-provided nickname that the seller uses to
     * represent the bank account.
     *
     * @var string
     */
    public $nickname = null;
}
