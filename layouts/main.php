<?php
use yii\helpers\Html;
use lubaogui\athens\helpers\Layout;
use lubaogui\athens\widgets\Menu;
use lubaogui\athens\widgets\NavBar;
use lubaogui\athens\widgets\Nav;
use lubaogui\athens\widgets\Breadcrumbs;
use lubaogui\athens\widgets\Button;
use lubaogui\athens\widgets\HorizontalMenu;
use lubaogui\athens\Athens;
use lubaogui\athens\widgets\Badge;

/* @var $this \yii\web\View */
/* @var $content string */

Athens::registerThemeAsset($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]><html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]><html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>" class="no-js">
<!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <meta name="MobileOptimized" content="320">
        <link rel="shortcut icon" href="favicon.ico"/>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body <?= Layout::getHtmlOptions('body', '', true) ?> >
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <header>
        <?php
        NavBar::begin(
                [
                    'brandLabel' => '路伴儿网',
                    'brandLogoUrl' => Athens::getAssetsUrl($this) . '/img/logo.png',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => Layout::getHtmlOptions('header', false),
                ]
        );
        ?>
        <div class="top-menu">
        <?php
        echo Nav::widget(
                [
                    'encodeLabels' => false,
                    'position' => Nav::POS_RIGHT,
                    'items' => [
                        [
                            'icon' => 'fa fa-inbox',
                            'badge' => Badge::widget(['label' => '18', 'type' => 'success']),
                            'label' => '个人中心',
                            'url' => ['/user/'],
                            // dropdown title
                            'title' => '',
                            'more' => ['label' => 'Go', 'url' => '/', 'icon' => 'm-icon-swapright'],
                            // scroller
                            'scroller' => ['height' => 200],
                            // end dropdown
                            'items' => [
                                [
                                    'icon' => 'fa fa-calendar',
                                    'label' => '小猫',
                                    'url' => ['/message/view/1'],
                                    'badge' => Badge::widget(['label' => '19', 'type' => 'danger']),
                                ],
                            ]
                        ],
                        [
                            'label' => Nav::userItem('吕宝贵', Athens::getAssetsUrl($this) . '/img/avatar3_small.jpg'),
                            'url' => '#',
                            'type' => 'user',
                            'items' => [
                                [
                                    'icon' => 'fa fa-calendar',
                                    'label' => '个人信息',
                                    'url' => '/site/about',
                                    'badge' => Badge::widget(['label' => '19', 'type'=>'success']),
                                ],
                                [
                                    'icon' => 'fa fa-calendar',
                                    'label' => '日程',
                                    'url' => '/site/learn',
                                    'badge' => Badge::widget(['label' => '18', 'type'=>'danger']),
                                ],
                                [
                                    'icon' => 'fa fa-calendar',
                                    'label' => '日程',
                                    'url' => '/site/learn',
                                    'badge' => Badge::widget(['label' => '18', 'type'=>'danger']),
                                ],
                                ['divider'],
                                ['label' => '赞', 'url' => ['/like/']],
                                ['label' => '退出', 'url' => ['/site/logout']],
                            ],
                            'options' => ['class'=>'dropdown-user'],
                        ],
                    // [ 'label' => 'Contact', 'url' => ['/site/contact']],
                    ],
                ]
        );
        ?>
        </div>
        <?php
        NavBar::end();
        ?>
    </header>
    <!-- END HEADER -->

    <div class="clearfix"></div>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?=
            Menu::widget(
                    [
                        'visible' => true,
                        'items' => [
                            // Important: you need to specify url as 'controller/action',
                            // not just as 'controller' even if default action is used.
                            // 'Products' menu item will be selected as long as the route is 'product/index'
                            [
                                'icon' => 'fa fa-home',
                                'label' => '首页',
                                'url' => ['/site/index'],
                            ],
                            [
                                'icon' => 'fa fa-cogs',
                                'badge' => Badge::widget(['label' => 'New', 'round' => false, 'type' => Badge::TYPE_SUCCESS]),
                                'label' => '商品',
                                'url' => '#',
                                'items' => [
                                    ['label' => '新上商品', 'url' => ['/product/new', 'tag' => 'new']],
                                    [
                                        'label' => '热门商品',
                                        'url' => ['/product/hot'],
                                    ],
                                ]
                            ],
                            [
                                'icon' => 'fa fa-bookmark-o',
                                'label' => '界面组件',
                                'url' => '#',
                                'items' => [
                                    [
                                        'label' => '按钮和图标',
                                        'url' => ['/widgets/index'],
                                    ],
                                ],
                            ],
                            [
                                'icon' => 'fa fa-user',
                                'label' => '关于我们',
                                'url' => ['/site/about'],
                            ],
                            [
                                'icon' => 'fa fa-user',
                                'label' => '联系我们',
                                'url' => ['/site/contact'],
                            ],
                        ],
                    ]
            );
            ?>
            <!-- END SIDEBAR -->

        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1028px">
            <div class="page-bar">
            <?=  Breadcrumbs::widget(
                                    [
                                    'homeLink' => [
                                        'label' => '首页',
                                        'icon' => 'fa fa-home',
                                        'url' => ['/']
                                    ],
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    ]
                                    );
            ?>
            </div>
            <?= $content ?>
            </div>
        </div>

    </div>

    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <footer class="page-footer">
        <div class="page-footer-inner">
            2014 &copy; Athens by Lubanr.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </footer>
    <!-- END FOOTER -->

    <?php $this->endBody() ?>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>

<!-- END JAVASCRIPTS -->
</body>
</html>
<?php $this->endPage() ?>
