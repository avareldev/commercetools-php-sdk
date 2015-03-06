<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\Products;


use GuzzleHttp\Message\ResponseInterface;
use Sphere\Core\Client\HttpMethod;
use Sphere\Core\Client\HttpRequest;
use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Product\ProductProjection;
use Sphere\Core\Request\AbstractApiRequest;
use Sphere\Core\Request\PageTrait;
use Sphere\Core\Request\QueryTrait;
use Sphere\Core\Request\StagedTrait;
use Sphere\Core\Response\SingleResourceResponse;

/**
 * Class ProductProjectionFetchBySlugRequest
 * @package Sphere\Core\Request\Products
 */
class ProductProjectionFetchBySlugRequest extends AbstractApiRequest
{
    const UUID_FORMAT = '/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/i';

    use QueryTrait;
    use StagedTrait;
    use PageTrait;

    /**
     * @param string $slug
     * @param Context $context
     */
    public function __construct($slug, Context $context)
    {
        parent::__construct(ProductSearchEndpoint::endpoint(), $context);
        $parts = array_map(
            function ($value) {
                return sprintf('slug(%s="%s")', $value, '%1$s');
            },
            $context->getLanguages()
        );
        if (preg_match(static::UUID_FORMAT, $slug)) {
            $parts[] = 'id="%1$s"';
        }
        if (!is_null($slug) && !empty($parts)) {
            $this->where(sprintf(implode(' or ', $parts), $slug));
        }
        $this->limit(1);
    }

    /**
     * @return HttpRequest
     * @internal
     */
    public function httpRequest()
    {
        return new HttpRequest(HttpMethod::GET, $this->getPath());
    }

    /**
     * @param ResponseInterface $response
     * @return SingleResourceResponse
     */
    public function buildResponse(ResponseInterface $response)
    {
        return new SingleResourceResponse($response, $this, $this->getContext());
    }

    /**
     * @param array $result
     * @param Context $context
     * @return ProductProjection|null
     */
    public function mapResult(array $result, Context $context = null)
    {
        if (!empty($result['results'])) {
            $data = current($result['results']);
            return ProductProjection::fromArray($data, $context);
        }
        return null;
    }
}
