<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This field is returned for NON_SALE_CHARGE transactions that contain
 * non-transactional seller fees.
 */
class Reference extends AbstractModel
{
    /**
     * The identifier of the transaction as specified by the referenceType. For
     * example, with a referenceType of item_id, the referenceId refers to a unique
     * item. This item may have several NON_SALE_CHARGE transactions.
     *
     * @var string
     */
    public $referenceId = null;

    /**
     * An enumeration value that identifies the reference type associated with the
     * referenceId. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/pay:ReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $referenceType = null;
}
