<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is the base response type of the getTransactionSummary method, and
 * based on the filters that are used in the getTransactionSummary call URI, the
 * response may include total count and amount of the seller's sales and credits,
 * total count and amount of buyer refunds, and total count and amount of seller
 * payment holds.
 */
class TransactionSummaryResponse extends AbstractModel
{
    /**
     * Total adjustment amount for given payee within a specified period.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $adjustmentAmount = null;

    /**
     * The credit debit sign indicator for adjustment. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $adjustmentBookingEntry = null;

    /**
     * Total adjustment count for given payee within a specified period.
     *
     * @var int
     */
    public $adjustmentCount = null;

    /**
     * The total balance transfer amount for given payee within the specified period.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $balanceTransferAmount = null;

    /**
     * The credit debit sign indicator for the balance transfer. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $balanceTransferBookingEntry = null;

    /**
     * The total balance transfer count for given payee within the specified period.
     *
     * @var int
     */
    public $balanceTransferCount = null;

    /**
     * This amount is the total dollar value of all the seller's sales and/or credits
     * that match the input criteria. Note: Unless the transactionType filter is used
     * in the request to retrieve a specific type of monetary transaction, the
     * creditCount and creditAmount fields account for both order sales and seller
     * credits (the count and value is not distinguished between the two monetary
     * transaction types). If there are no sales/credits (creditCount=0), this
     * container is not returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $creditAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the creditAmount
     * field is a charge (debit) to the seller or a credit. Typically, the enumeration
     * value returned here will be CREDIT. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $creditBookingEntry = null;

    /**
     * This integer value indicates the total number of the seller's sales and/or
     * credits that match the input criteria. Note: Unless the transactionType filter
     * is used in the request to retrieve a specific type of monetary transaction
     * (sale, buyer refund, or seller credit), the creditCount and creditAmount fields
     * account for both order sales and seller credits (the count and value is not
     * distinguished between the two monetary transaction types). This field is
     * generally returned, even if 0, but it will not be returned if a transactionType
     * filter is used, and its value is set to either REFUND, DISPUTE, or
     * SHIPPING_LABEL.
     *
     * @var int
     */
    public $creditCount = null;

    /**
     * This amount is the total dollar value associated with any existing payment
     * disputes that have been initiated by one or more buyers. Only the orders that
     * match the input criteria are considered. The Payment Disputes methods in the
     * Fulfillment API can be used by the seller to retrieve more information about any
     * payment disputes. If there are no payment disputes (disputeCount=0), this
     * container is not returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $disputeAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the disputeAmount
     * field is a charge (debit) to the seller or a credit. Typically, the enumeration
     * value returned here will be DEBIT, but its possible that CREDIT could be
     * returned if the seller contested one or more payment disputes and won the
     * dispute. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $disputeBookingEntry = null;

    /**
     * This integer value indicates the total number of payment disputes that have been
     * initiated by one or more buyers. Only the orders that match the input criteria
     * are considered. The Payment Disputes methods in the Fulfillment API can be used
     * by the seller to retrieve more information about any payment disputes. This
     * field is generally returned, even if 0, but it will not be returned if a
     * transactionType filter is used, and its value is set to any value other than
     * DISPUTE.
     *
     * @var int
     */
    public $disputeCount = null;

    /**
     * The total non-sale charge amount for given payee within a specified period.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $nonSaleChargeAmount = null;

    /**
     * The credit/debit sign indicator for the non-sale charge. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $nonSaleChargeBookingEntry = null;

    /**
     * The total non-sale charge count for given payee within a specified period.
     *
     * @var int
     */
    public $nonSaleChargeCount = null;

    /**
     * This amount is the total dollar value of order sales where the associated funds
     * are on hold. Only the orders that match the input criteria are considered. If
     * there are no seller payment holds (onHoldCount=0), this container is not
     * returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $onHoldAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the onHoldAmount
     * field is a charge (debit) to the seller or a credit. Typically, the enumeration
     * value returned here will be CREDIT, since on-hold funds should eventually be
     * released as part of a payout to the seller once the hold is cleared. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $onHoldBookingEntry = null;

    /**
     * This integer value indicates the total number of order sales where the
     * associated funds are on hold. Only the orders that match the input criteria are
     * considered. This field is generally returned, even if 0, but it will not be
     * returned if a transactionStatus filter is used, and its value is set to any
     * value other than FUNDS_ON_HOLD.
     *
     * @var int
     */
    public $onHoldCount = null;

    /**
     * This amount is the total dollar value of buyer refunds that match the input
     * criteria. If there are no refunds (refundCount=0), this container is not
     * returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $refundAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the refundAmount
     * field is a charge (debit) to the seller or a credit. Typically, the enumeration
     * value returned here will be DEBIT since this a refund from the seller to the
     * buyer. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundBookingEntry = null;

    /**
     * This integer value indicates the total number of buyer refunds that match the
     * input criteria. This field is generally returned, even if 0, but it will not be
     * returned if a transactionType filter is used, and its value is set to any value
     * other than REFUND.
     *
     * @var int
     */
    public $refundCount = null;

    /**
     * This is the total dollar value of the eBay shipping labels purchased by the
     * seller.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $shippingLabelAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the
     * shippingLabelAmount field is a charge (debit) to the seller or a credit.
     * Typically, the enumeration value returned here will be DEBIT, as eBay will
     * charge the seller when eBay shipping labels are purchased, but it can be CREDIT
     * if the seller was refunded for a shipping label or was possibly overcharged for
     * a shipping label. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $shippingLabelBookingEntry = null;

    /**
     * This is the total number of eBay shipping labels purchased by the seller. The
     * count returned here may depend on the specified input criteria.
     *
     * @var int
     */
    public $shippingLabelCount = null;

    /**
     * This amount is the total dollar value of buyer refund transfers that match the
     * input criteria. If there are no transfers (refundCount=0), this container is not
     * returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $transferAmount = null;

    /**
     * The enumeration value indicates whether the dollar amount in the transferAmount
     * field is a charge (debit) to the seller or a credit. Typically, the enumeration
     * value returned here will be DEBIT since this a seller reimbursement to eBay for
     * buyer refunds. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $transferBookingEntry = null;

    /**
     * This integer value indicates the total number of buyer refund transfers that
     * match the input criteria. This field is generally returned, even if 0, but it
     * will not be returned if a transactionType filter is used, and its value is set
     * to any value other than TRANSFER.
     *
     * @var int
     */
    public $transferCount = null;
}
