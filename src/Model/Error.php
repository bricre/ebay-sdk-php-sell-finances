<?php

namespace Ebay\Sell\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields that can be returned in an error.
 */
class Error extends AbstractModel
{
    /**
     * Identifies the type of erro.
     *
     * @var string
     */
    public $category = null;

    /**
     * Name for the primary system where the error occurred. This is relevant for
     * application errors.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A unique number to identify the error.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * An array of request elements most closely associated to the error.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * A more detailed explanation of the error.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * Information on how to correct the problem, in the end user's terms and language
     * where applicable.
     *
     * @var string
     */
    public $message = null;

    /**
     * An array of request elements most closely associated to the error.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * An array of name/value pairs that describe details the error condition. These
     * are useful when multiple errors are returned.
     *
     * @var \Ebay\Sell\Finances\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * Further helps indicate which subsystem the error is coming from. System
     * subcategories include: Initialization, Serialization, Security, Monitoring, Rate
     * Limiting, etc.
     *
     * @var string
     */
    public $subdomain = null;
}
