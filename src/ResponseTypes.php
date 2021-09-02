<?php

namespace Ebay\Sell\Finances;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getPayout' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\Payout',
        ],
        'getPayouts' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\Payouts',
        ],
        'getPayoutSummary' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\PayoutSummaryResponse',
        ],
        'getTransactions' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\Transactions',
        ],
        'getTransactionSummary' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\TransactionSummaryResponse',
        ],
        'getTransfer' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\Transfer',
        ],
        'getSellerFundsSummary' => [
            '200.' => 'Ebay\\Sell\\Finances\\Model\\SellerFundsSummaryResponse',
        ],
    ];
}
