<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to express the dollar value and currency used for any
 * transaction retrieved with the Finances API, including an order total, a seller
 * payout, a buyer refund, or a seller credit.
 */
class Amount extends AbstractModel
{
    /**
     * A three-letter ISO 4217 code that indicates the currency of the amount in the
     * value field. This field is always returned with any container using Amount type.
     * Default: The currency of the authenticated user's country. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * convertedFromValue field. This value is the pre-conversion currency. This field
     * is only returned if/when currency conversion was applied by eBay. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $convertedFromCurrency = null;

    /**
     * The monetary amount before any conversion is performed, in the currency
     * specified by the convertedFromCurrency field. This value is the pre-conversion
     * amount. The value field contains the converted amount of this value, in the
     * currency specified by the currency field. This field is only returned if/when
     * currency conversion was applied by eBay.
     *
     * @var string
     */
    public $convertedFromValue = null;

    /**
     * The exchange rate used for the monetary conversion. This field shows the
     * exchange rate used to convert the dollar value in the value field from the
     * dollar value in the convertedFromValue field. This field is only returned when
     * eBay does a currency version, and a currency conversion is generally needed if
     * the buyer is viewing, or has purchased an item on an international site. This
     * field is only returned if/when currency conversion was applied by eBay.
     *
     * @var string
     */
    public $exchangeRate = null;

    /**
     * The monetary amount, in the currency specified by the currency field. This field
     * is always returned with any container using Amount type.
     *
     * @var string
     */
    public $value = null;
}
