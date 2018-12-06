<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\commerce\events;

use yii\base\Event;

/**
 * Class CustomizeProductSnapshotDataEvent
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 2.0
 */
class CustomizeProductSnapshotDataEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var Product The product
     */
    public $product;

    /**
     * @var array The captured data
     */
    public $fieldData;
}
