<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is the base response type of the getPayoutSummary method, and contains
 * the total count of seller payouts (that match the input criteria), the total
 * count of monetary transactions (order payment, buyer refunds, or seller credits)
 * associated with those payouts, and the total value of those seller payouts.
 */
class PayoutSummaryResponse extends AbstractModel
{
    /**
     * This container shows the total value (and currency type used) of the seller
     * payouts that match the input criteria. This field is not returned if there are
     * no payouts that match the input criteria.
     *
     * @var \Ebay\Sell\Finances\Model\Amount
     */
    public $amount = null;

    /**
     * This integer value indicates the total count of payouts to the seller that match
     * the input criteria. This field is always returned, even if there are no payouts
     * that match the input criteria (its value will show 0).
     *
     * @var int
     */
    public $payoutCount = null;

    /**
     * This integer value indicates the total count of monetary transactions (order
     * payments, buyer refunds, and seller credits) associated with the payouts that
     * match the input criteria. This field is always returned, even if there are no
     * payouts that match the input criteria (its value will show 0). If there is at
     * least one payout that matches the input criteria, the value in this field will
     * be at least 1.
     *
     * @var int
     */
    public $transactionCount = null;
}
