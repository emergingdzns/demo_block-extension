<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class EmergingdznsExtensionDemoBlockCreateDemoBlockFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class EmergingdznsExtensionDemoBlockCreateDemoBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'   => 'anomaly.field_type.text',
        'content' => 'anomaly.field_type.wysiwyg'
    ];

}
