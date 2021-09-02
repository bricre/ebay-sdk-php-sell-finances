<?php

namespace Ebay\Sell\Finances\Api;

use Ebay\Sell\Finances\Model\SellerFundsSummaryResponse as SellerFundsSummaryResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SellerFundsSummary extends AbstractAPI
{
    /**
     * This method retrieves all pending funds that have not yet been distibuted
     * through a seller payout. There are no input parameters for this method. The
     * response payload includes available funds, funds being processed, funds on hold,
     * and also an aggregate count of all three of these categories. If there are no
     * funds that are pending, on hold, or being processed for the seller's account, no
     * response payload is returned, and an http status code of 204 - No Content is
     * returned instead.
     *
     * @return SellerFundsSummaryResponse
     */
    public function get(): SellerFundsSummaryResponse
    {
        return $this->client->request('getSellerFundsSummary', 'GET', 'seller_funds_summary',
            [
            ]
        );
    }
}
