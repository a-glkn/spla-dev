<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START);?>
    <?php Yii::app()->getController()->widget(
        'vendor.chemezov.yii-seo.widgets.SeoHead',
        [
            'httpEquivs' => [
                'Content-Type' => 'text/html; charset=utf-8',
                'X-UA-Compatible' => 'IE=edge,chrome=1',
                'Content-Language' => 'ru-RU'
            ],
            'defaultTitle' => $this->yupe->siteName,
            'defaultDescription' => $this->yupe->siteDescription,
            'defaultKeywords' => $this->yupe->siteKeyWords,
        ]
    ); ?>

    <?php

    //default
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/yupe.css');

    //custom
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/css/slick.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/css/jquery-ui.min.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/css/style.css');
   

    //default
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');


    //custom
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-ui.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/main.js');


    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>

<body>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

    <header>
        <div class="wrapper">
            <div class="logo"><a href="<?php echo Yii::app()->urlManager->createUrl( '/'); ?>" id="logo"><img src="<?php echo $this->mainAssets; ?>/images/logo.png" alt=""></a></div>
            <div class="phones">
                <h2 class='more'>+7 812 425 12 19</h2>
                <h2>8 800 200 66 26</h2>
                <button class="btn">Заказать звонок</button>
            </div>
            <?php if (Yii::app()->hasModule('menu')): ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu']); ?>
            <?php endif; ?>
        </div>
    </header>

    <?php $this->widget('yupe\widgets\YFlashMessages'); ?>