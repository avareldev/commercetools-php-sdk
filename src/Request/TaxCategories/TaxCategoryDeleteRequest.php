<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\TaxCategories;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractDeleteRequest;
use Commercetools\Core\Model\TaxCategory\TaxCategory;
use Commercetools\Core\Response\ApiResponseInterface;

/**
 * @package Commercetools\Core\Request\TaxCategories
 * @apidoc http://dev.sphere.io/http-api-projects-taxCategories.html#delete-tax-category
 * @method TaxCategory mapResponse(ApiResponseInterface $response)
 */
class TaxCategoryDeleteRequest extends AbstractDeleteRequest
{
    protected $resultClass = '\Commercetools\Core\Model\TaxCategory\TaxCategory';

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     */
    public function __construct($id, $version, Context $context = null)
    {
        parent::__construct(TaxCategoriesEndpoint::endpoint(), $id, $version, $context);
    }

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     * @return static
     */
    public static function ofIdAndVersion($id, $version, Context $context = null)
    {
        return new static($id, $version, $context);
    }
}