<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express the details of one seller payout that is returned
 * with the getPayout or getPayouts methods.
 */
class Payout extends AbstractModel
{
    /**
     * This the total amount of the seller payout. The container shows the dollar
     * amount of the payout and the currency used. The value of the payout is always
     * shown, even if the payout has failed.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $amount = null;

    /**
     * This field contains additional information provided by the bank and passed on by
     * the payment processor; e.g., the manner in which the transaction will appear on
     * the seller's bank statement. The field is returned only when provided by the
     * bank and processor.
     *
     * @var string
     */
    public $bankReference = null;

    /**
     * This timestamp indicates the date/time when eBay last attempted to process a
     * seller payout but it failed. This field is only returned if a seller payout
     * fails, and the payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED. A
     * seller can filter on the lastAttemptedPayoutDate in a getPayouts request.
     *
     * @var string
     */
    public $lastAttemptedPayoutDate = null;

    /**
     * This timestamp indicates when the seller payout began processing. The following
     * format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z.
     * This field is still returned even if the payout was pending but failed
     * (payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED).
     *
     * @var string
     */
    public $payoutDate = null;

    /**
     * The unique identifier of the seller payout. This identifier is generated once
     * eBay begins processing the payout to the seller's bank account.
     *
     * @var string
     */
    public $payoutId = null;

    /**
     * This field contains information provided by upstream components, based on
     * internal and external commitments. A typical message would contain the expected
     * arrival time of the payout.
     *
     * @var string
     */
    public $payoutMemo = null;

    /**
     * This container provides details about the seller's account that received (or is
     * scheduled to receive) the payout. This container is still returned even if the
     * payout failed.
     *
     * @var \Ebay\Sell\Finances\Model\PayoutInstrument
     */
    public $payoutInstrument = null;

    /**
     * This enumeration value indicates the current status of the seller payout. For a
     * successful payout, the value returned will be SUCCEEDED. See the
     * PayoutStatusEnum type for more details on each payout status value. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:PayoutStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $payoutStatus = null;

    /**
     * This field provides more details about the current status of payout. The
     * description returned here will correspond with enumeration value returned in the
     * payoutStatus field. The following shows what description text might appear based
     * on the different payoutStatus values: INITIATED: Preparing to send SUCCEEDED:
     * Funds sent REVERSED: Waiting to retry : Money rejected by seller's bank
     * RETRYABLE_FAILED: Waiting to retry TERMINAL_FAILED: Payout failed.
     *
     * @var string
     */
    public $payoutStatusDescription = null;

    /**
     * This integer value indicates the number of monetary transactions (all orders,
     * refunds, and credits, etc.) that have occurred with the corresponding payout.
     * Its value should always be at least 1, since there is at least one order per
     * seller payout.
     *
     * @var int
     */
    public $transactionCount = null;
}
