<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Category;

use Commercetools\Core\Model\Common\Resource;
use Commercetools\Core\Model\Common\LocalizedString;
use Commercetools\Core\Model\CustomField\CustomFieldObject;
use Commercetools\Core\Model\Common\DateTimeDecorator;

/**
 * @package Commercetools\Core\Model\Category
 * @apidoc http://dev.sphere.io/http-api-projects-categories.html#category
 * @method string getId()
 * @method Category setId(string $id = null)
 * @method int getVersion()
 * @method Category setVersion(int $version = null)
 * @method DateTimeDecorator getCreatedAt()
 * @method Category setCreatedAt(\DateTime $createdAt = null)
 * @method DateTimeDecorator getLastModifiedAt()
 * @method Category setLastModifiedAt(\DateTime $lastModifiedAt = null)
 * @method LocalizedString getName()
 * @method Category setName(LocalizedString $name = null)
 * @method LocalizedString getSlug()
 * @method Category setSlug(LocalizedString $slug = null)
 * @method LocalizedString getDescription()
 * @method Category setDescription(LocalizedString $description = null)
 * @method CategoryReferenceCollection getAncestors()
 * @method Category setAncestors(CategoryReferenceCollection $ancestors = null)
 * @method CategoryReference getParent()
 * @method Category setParent(CategoryReference $parent = null)
 * @method string getOrderHint()
 * @method Category setOrderHint(string $orderHint = null)
 * @method string getExternalId()
 * @method Category setExternalId(string $externalId = null)
 * @method CustomFieldObject getCustom()
 * @method Category setCustom(CustomFieldObject $custom = null)
 */
class Category extends Resource
{
    public function fieldDefinitions()
    {
        return [
            'id' => [static::TYPE => 'string'],
            'version' => [static::TYPE => 'int'],
            'createdAt' => [
                static::TYPE => '\DateTime',
                static::DECORATOR => '\Commercetools\Core\Model\Common\DateTimeDecorator'
            ],
            'lastModifiedAt' => [
                static::TYPE => '\DateTime',
                static::DECORATOR => '\Commercetools\Core\Model\Common\DateTimeDecorator'
            ],
            'name' => [self::TYPE => 'Commercetools\Core\Model\Common\LocalizedString'],
            'slug' => [self::TYPE => 'Commercetools\Core\Model\Common\LocalizedString'],
            'description' => [self::TYPE => 'Commercetools\Core\Model\Common\LocalizedString'],
            'ancestors' => [self::TYPE => '\Commercetools\Core\Model\Category\CategoryReferenceCollection'],
            'parent' => [self::TYPE => '\Commercetools\Core\Model\Category\CategoryReference'],
            'orderHint' => [self::TYPE => 'string'],
            'externalId' => [self::TYPE => 'string'],
            'custom' => [static::TYPE => '\Commercetools\Core\Model\CustomField\CustomFieldObject'],
        ];
    }
}