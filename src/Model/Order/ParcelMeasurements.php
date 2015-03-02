<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Model\Order;

use Sphere\Core\Model\Common\JsonObject;

/**
 * Class ParcelMeasurements
 * @package Sphere\Core\Model\Order
 * @method int getHeightInMillimeter()
 * @method ParcelMeasurements setHeightInMillimeter(int $heightInMillimeter)
 * @method int getLengthInMillimeter()
 * @method ParcelMeasurements setLengthInMillimeter(int $lengthInMillimeter)
 * @method int getWidthInMillimeter()
 * @method ParcelMeasurements setWidthInMillimeter(int $widthInMillimeter)
 * @method int getWeightInMillimeter()
 * @method ParcelMeasurements setWeightInMillimeter(int $weightInMillimeter)
 */
class ParcelMeasurements extends JsonObject
{
    public function getFields()
    {
        return [
            'heightInMillimeter' => [static::TYPE => 'int'],
            'lengthInMillimeter' => [static::TYPE => 'int'],
            'widthInMillimeter' => [static::TYPE => 'int'],
            'weightInMillimeter' => [static::TYPE => 'int'],
        ];
    }
}
