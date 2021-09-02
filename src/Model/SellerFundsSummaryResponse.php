<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the response payload of the getSellerFundsSummary method.
 * All of the funds returned in getSellerFundsSummary are funds that have not yet
 * been paid to the seller through a seller payout. If there are no funds that are
 * pending, on hold, or being processed for the seller's account, no response
 * payload is returned, and an http status code of 204 - No Content is returned
 * instead.
 */
class SellerFundsSummaryResponse extends AbstractModel
{
    /**
     * The dollar value in this field represents the total amount of order funds that
     * are available for a payout, but processing for a seller payout has not yet
     * begun. If a seller wants to get more details on sales transactions that have yet
     * to be processed, the seller can use the getTransactions method, and use the
     * transactionStatus filter with its value set to FUNDS_AVAILABLE_FOR_PAYOUT. This
     * container is not returned if there are no funds available to be processed for a
     * payout.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $availableFunds = null;

    /**
     * The dollar value in this field represents the total amount of order funds on
     * hold. Seller payment holds can occur for different reasons. If a seller wants to
     * get more details on sales transactions where funds are currently on hold, the
     * seller can use the getTransactions method, and use the transactionStatus filter
     * with its value set to FUNDS_ON_HOLD. This container is not returned if there are
     * no seller payment holds that will eventually be processed for a payout.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $fundsOnHold = null;

    /**
     * The dollar value in this field represents the total amount of order funds being
     * prepared and processed for a seller payout. If a seller wants to get more
     * details on sales transactions that are being processed, the seller can use the
     * getTransactions method, and use the transactionStatus filter with its value set
     * to FUNDS_PROCESSING. This container is not returned if there are no funds being
     * processed for a payout.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $processingFunds = null;

    /**
     * The dollar value in this field represents the total amount of order funds still
     * due to be distributed to the seller through a seller payout. The dollar value in
     * this field should equal the amounts found in the three other containers. If
     * there are no pending funds due to the seller through a payout, this container is
     * not returned, and there will not be any response payload at all. Instead, an
     * http status code of 204 - No Content is returned.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $totalFunds = null;
}
