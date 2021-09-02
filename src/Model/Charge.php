<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the charge container, which is an array of one or more
 * charges related to the transfer.
 */
class Charge extends AbstractModel
{
    /**
     * The unique identifier of an order cancellation. This field is only applicable
     * and returned if the charge is related to an order cancellation.
     *
     * @var string
     */
    public $cancellationId = null;

    /**
     * The unique identifier of a case filed against an order. This field is only
     * applicable and returned if the charge is related to a case filed against an
     * order.
     *
     * @var string
     */
    public $caseId = null;

    /**
     * This container shows the net amount of the charge, which is the total amount of
     * the charge minus the total amount of fees credited towards this refund as per
     * eBay policy. It is possible for there to be multiple charges from multiple
     * orders with one transfer. The net aggregate amount for all charges found in the
     * charges array can be found in the transferDetail.totalChargeNetAmount container.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $chargeNetAmount = null;

    /**
     * The unique identifier of an Item Not Received (INR) inquiry filed against an
     * order. This field is only applicable and returned if the charge is related to
     * has an INR inquiry filed against the order.
     *
     * @var string
     */
    public $inquiryId = null;

    /**
     * The unique identifier of the order that is associated with the charge.
     *
     * @var string
     */
    public $orderId = null;

    /**
     * The unique identifier of a third-party payment dispute filed against an order.
     * This occurs when the buyer files a dispute against the order with their payment
     * provider, and then the dispute comes into eBay's system. This field is only
     * applicable and returned if the charge is related to a third-party payment
     * dispute filed against an order.
     *
     * @var string
     */
    public $paymentDisputeId = null;

    /**
     * The unique identifier of a buyer refund associated with the charge.
     *
     * @var string
     */
    public $refundId = null;

    /**
     * The unique identifier of an order return. This field is only applicable and
     * returned if the charge is related to an order that was returned by the buyer.
     *
     * @var string
     */
    public $returnId = null;
}
