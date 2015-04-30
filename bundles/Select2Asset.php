<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  lubaogui\athens\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class Select2Asset extends AssetBundle
{
    public $sourcePath = '@lubaogui/athens/assets';
    public $js = [
        'global/plugins/select2/select2.min.js',
    ];

    public $css = [
        'global/plugins/select2/select2.css',
        'global/plugins/select2/select2-bootstrap.css',
    ];


    public $depends = [
        'lubaogui\athens\bundles\CoreAsset',
    ];
}
