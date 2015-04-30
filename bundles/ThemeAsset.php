<?php

/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2014 Digital Deals s.r.o. 
 * @license http://www.digitaldeals.cz/license/
 */

namespace lubaogui\athens\bundles;

use yii\web\AssetBundle;
use lubaogui\athens\Metronic;

class ThemeAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@lubaogui/athens/assets/admin/';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'lubaogui\athens\bundles\CoreAsset',
        'lubaogui\athens\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
        'css/themes/{theme}.css',
        'css/custom.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'scripts/layout.js',
        'scripts/demo.js',
        'scripts/index.js',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleSourcePath();

        $this->_handleDynamicCss();

        return parent::init();
    }

    /**
     * Parses source path
     */
    private function _handleSourcePath()
    {
        $self->sourcePath .= Athens::getComponent()->version;
    }

    /**
     * Parses dynamic css
     */
    private function _handleDynamicCss()
    {
        $theme = Athens::getComponent()->theme;
        foreach ($this->css as $css) {
            $css = str_replace('{theme}', $theme, $css);           
        }
    }

}
