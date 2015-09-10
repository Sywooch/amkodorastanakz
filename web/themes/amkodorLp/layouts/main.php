<?php
/**
 * @var $this \yii\web\View
 */
\app\assets\AppAsset::register($this);

use yii\helpers\Url;

$this->beginPage();
?>
    <!DOCTYPE html><!--[if IE 7]>
    <html class="ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="ru"><![endif]-->
    <!--[if IE 8]>
    <html class="ie8 lt-ie10 lt-ie9 no-js" lang="ru"><![endif]-->
    <!--[if IE 9 ]>
    <html class="ie9 lt-ie10 no-js" lang="ru"><![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <html class="no-js" lang="ru"><!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <title><?=$this->title?></title>
            <?=$this->head()?>
            <meta content="telephone=no" name="format-detection">
            <meta name="robots" content="noodp, noydir">
            <meta name="viewport" content="width=1200">
            <meta name="HandheldFriendly" content="true">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
            <!--[if lt IE 9 ]>
            <meta content="no" http-equiv="imagetoolbar"><![endif]-->
            <!--[if IE 8 ]>
            <link href="<?=$this->theme->getUrl('static/css/main_ie8.min.css')?>"rel="stylesheet" type="text/css"><![endif]-->
            <!--[if IE 9 ]>
            <link href="<?=$this->theme->getUrl('static/css/main_ie9.min.css')?>"rel="stylesheet" type="text/css"><![endif]-->
            <!--[if (gt IE 9)|!(IE)]><!-->
            <link href="<?=$this->theme->getUrl('static/css/main.min.css')?>"rel="stylesheet" type="text/css">
            <!--<![endif]-->
            <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
            <meta property="og:title" content="default title">
            <meta property="og:title" content=""/>
            <meta property="og:url" content=""/>
            <meta property="og:description" content=""/>
            <meta property="og:image" content=""/>
            <meta property="og:image:type" content="image/jpeg"/>
            <meta property="og:image:width" content="500"/>
            <meta property="og:image:height" content="300"/>
            <meta property="twitter:description" content=""/>
            <link rel="image_src" href=""/>
            <link rel="icon" type="image/png" href="favicon.ico">
            <script>(function (H) {
                    H.className = H.className.replace(/\bno-js\b/, 'js')
                })(document.documentElement)</script>
            <!--[if lt IE 9 ]>
            <script src="<?=$this->theme->getUrl('static/js/separate-js/html5shiv-3.7.2.min.js')?>"type="text/javascript"></script>
            <meta content="no" http-equiv="imagetoolbar"><![endif]-->
        </head>
        <body>
            <?php $this->beginBody()?>
            <header class="header <?php if(Yii::$app->controller->route != 'cms/default/index') echo 'inside'?>">
                <div class="header__wrapper">
                    <a href="<?=Url::home()?>" title="" class="logo"></a>
                    <nav class="top-menu">
                        <a href="http://amkodor.by" target="_blank" title="" class="top-menu__item">О КОМПАНИИ</a>
                        <a href="<?= Url::to(["/store/category"]) ?>" title="" class="top-menu__item">ТЕХНИКА</a>
                        <a href="<?= Url::to(["/store/spares"]) ?>" title="" class="top-menu__item">ЗАПЧАСТИ</a>
                        <a href="<?= Url::to(['/cms/default/page', 'path' => 'servis']) ?>" title="" class="top-menu__item">СЕРВИС</a>
                        <a href="<?= Url::to(['/cms/default/page', 'path' => 'kontakti']) ?>" title="" class="top-menu__item">КОНТАКТЫ</a>
                    </nav>
                    <div class="header__phone">+7 7172 531-676</div>
                    <?php if (Yii::$app->controller->route == 'cms/default/index') echo \app\modules\cms\widgets\Feedback::widget(['template'=>'header'])?>
                </div>
            </header>
            <?=$content?>
            <footer class="footer">
                <div class="footer__wrapper">
                    <div class="logo"></div>
                    <div class="footer__copyright">www.amkodor-astana.kz</div>
                    <div class="footer__phone"><span>+7 7172 531-676</span><span>+7 771 833-26-70</span></div>
                </div>
            </footer>
            <?=\app\modules\store\widgets\SparesOrder::widget()?>
            <div class="modal-mask"></div>
            <?= $this->endBody() ?>
            <script src="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js" ></script>
            <script src="<?=$this->theme->getUrl('static/js/main.min.js')?>" ></script>
            <script src="<?=$this->registerJsFile('/site/js/app.js')?>" ></script>
        </body>
<?php $this->endPage()?>