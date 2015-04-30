<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace lubaogui\athens\bundles;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset for dateRangePicker widget.
 */
class DateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@lubaogui/athens/assets';
    public $js = [
        'plugins/bootstrap-daterangepicker/moment.min.js',
        'plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $css = [
        'plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-datetimepicker/css/datetimepicker.css',
    ];
    public $depends = [
        'lubaogui\athens\bundles\CoreAsset',
    ];

}
