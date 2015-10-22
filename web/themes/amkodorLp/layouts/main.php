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
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
            <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
                        <a href="/#about" title="" class="top-menu__item">О КОМПАНИИ</a>
                        <a href="<?= Url::to(["/store/category"]) ?>" title="" class="top-menu__item">ТЕХНИКА</a>
                        <a href="<?= Url::to(["/store/spares"]) ?>" title="" class="top-menu__item">ЗАПЧАСТИ</a>
                        <a href="<?= Url::to(['/cms/default/page', 'path' => 'servis']) ?>" title="" class="top-menu__item">СЕРВИС</a>
                        <a href="<?= Url::to(['/cms/default/page', 'path' => 'lizing']) ?>" title="" class="top-menu__item">Лизинг</a>
                        <a href="<?= Url::to(['/cms/default/page', 'path' => 'kontakti']) ?>" title="" class="top-menu__item">КОНТАКТЫ</a>
                    </nav>
                    <div class="header__phone">+7 7172 999-235</div>
                    <?php if (Yii::$app->controller->route == 'cms/default/index') echo \app\modules\cms\widgets\Feedback::widget(['template'=>'header'])?>
                </div>
            </header>
            <?=$content?>
            <footer class="footer">
                <div class="footer__wrapper">
                    <div class="logo"></div>
                    <div class="footer__copyright"><!-- www.amkodor-astana.kz -->
                        <nav class="top-menu">
                            <a href="/#about" title="" class="top-menu__item">О КОМПАНИИ</a>
                            <a href="<?= Url::to(["/store/category"]) ?>" title="" class="top-menu__item">ТЕХНИКА</a>
                            <a href="<?= Url::to(["/store/spares"]) ?>" title="" class="top-menu__item">ЗАПЧАСТИ</a>
                            <a href="<?= Url::to(['/cms/default/page', 'path' => 'servis']) ?>" title=""
                               class="top-menu__item">СЕРВИС
                            </a>
                            <a href="<?= Url::to(['/cms/default/page', 'path' => 'lizing']) ?>" title=""
                               class="top-menu__item">Лизинг
                            </a>
                            <a href="<?= Url::to(['/cms/default/page', 'path' => 'kontakti']) ?>" title=""
                               class="top-menu__item">КОНТАКТЫ
                            </a>
                        </nav>
                    </div>
                    <div class="footer__phone"><span>+7 7172 999-235</span><span>+7 7172 531-676</span></div>
                </div>
            </footer>
            <?=\app\modules\store\widgets\SparesOrder::widget()?>
            <div class="modal-mask"></div>
            <?= $this->endBody() ?>
            <script src="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js" ></script>
            <script src="<?=$this->theme->getUrl('static/js/main.min.js')?>" ></script>
            <script src="<?=$this->registerJsFile('@web/site/js/app.js')?>" ></script>
            <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55869135-16', 'auto');
  ga('send', 'pageview');

</script>
            <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33205798 = new Ya.Metrika({ id:33205798, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33205798" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
        </body>
<?php $this->endPage()?>