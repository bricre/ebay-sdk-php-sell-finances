<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is the base response type used by TRANSFER transaction type that is
 * returned in the response.
 */
class Transfer extends AbstractModel
{
    /**
     * This container provides details about the seller's funding source to reimburse
     * eBay for the transfer, such as a bank account, a credit card, or available
     * seller payout funds.
     *
     * @var \Ebay\Sell\Finances\Model\FundingSource
     */
    public $fundingSource = null;

    /**
     * This timestamp indicates the date/time of the transfer. The following (UTC)
     * format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2020-08-04T19:09:02.768Z.
     *
     * @var string
     */
    public $transactionDate = null;

    /**
     * The amount of the transfer being deducted from the funding source.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $transferAmount = null;

    /**
     * This container provides more details about the transfer, including details on
     * the charge(s) associated with the transfer. Multiple charges can be addressed
     * with one transfer.
     *
     * @var \Ebay\Sell\Finances\Model\TransferDetail
     */
    public $transferDetail = null;

    /**
     * The unique identifier of the TRANSFER transaction type. This is the same value
     * that was passed into the end of the call URI.
     *
     * @var string
     */
    public $transferId = null;
}
