<?php namespace Anomaly\DemoBlockExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class DemoBlockExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DemoBlockExtension
 */
class DemoBlockExtension extends Extension
{

    /**
     * This extension provides the demo
     * block for the Blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.demo';

}
