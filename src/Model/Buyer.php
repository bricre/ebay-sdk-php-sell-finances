<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express details about the buyer associated with an order.
 * At this time, the only field in this type is the eBay user ID of the buyer, but
 * more fields may get added at a later date.
 */
class Buyer extends AbstractModel
{
    /**
     * The eBay user ID of the order's buyer.
     *
     * @var string
     */
    public $username = null;
}
