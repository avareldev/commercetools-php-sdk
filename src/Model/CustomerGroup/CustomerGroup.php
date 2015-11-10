<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\CustomerGroup;

use Commercetools\Core\Model\Common\Resource;
use Commercetools\Core\Model\Common\DateTimeDecorator;

/**
 * @package Commercetools\Core\Model\CustomerGroup
 * @apidoc http://dev.sphere.io/http-api-projects-customerGroups.html#customer-group
 * @method string getId()
 * @method CustomerGroup setId(string $id = null)
 * @method int getVersion()
 * @method CustomerGroup setVersion(int $version = null)
 * @method DateTimeDecorator getCreatedAt()
 * @method CustomerGroup setCreatedAt(\DateTime $createdAt = null)
 * @method DateTimeDecorator getLastModifiedAt()
 * @method CustomerGroup setLastModifiedAt(\DateTime $lastModifiedAt = null)
 * @method string getName()
 * @method CustomerGroup setName(string $name = null)
 */
class CustomerGroup extends Resource
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
            'name' => [static::TYPE => 'string']
        ];
    }
}