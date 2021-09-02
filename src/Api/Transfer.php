<?php

namespace Ebay\Sell\Finances\Api;

use Ebay\Sell\Finances\Model\Transfer as TransferModel;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Transfer extends AbstractAPI
{
    /**
     * This method retrieves detailed information regarding a TRANSFER transaction
     * type. A TRANSFER is a monetary transaction type that involves a seller
     * transferring money to eBay for reimbursement of one or more charges. For
     * example, when a seller reimburses eBay for a buyer refund. If an ID is passed
     * into the URI that is an identifier for another transaction type, this call will
     * return an http status code of 404 Not found.
     *
     * @param string $transfer_Id the unique identifier of the TRANSFER transaction
     *                            type you wish to retrieve
     *
     * @return TransferModel
     */
    public function get(string $transfer_Id): TransferModel
    {
        return $this->client->request('getTransfer', 'GET', "transfer/{$transfer_Id}",
            [
            ]
        );
    }
}
