<?php
/**
 * @var $this \yii\web\View
 */
use app\modules\directorBoard\models\Board;
use yii\helpers\Url;
$this->beginPage();
\app\web\themes\amkador\AmkadorAsset::register($this);
?>
<!DOCTYPE html><!--[if IE 7]><html class="ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="ru"><![endif]-->
<!--[if IE 8]><html class="ie8 lt-ie10 lt-ie9 no-js" lang="ru"><![endif]-->
<!--[if IE 9 ]><html class="ie9 lt-ie10 no-js" lang="ru"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" lang="ru"><!--<![endif]-->
<head>
    <meta charset="utf-8"><title><?= $this->title?></title>
    <?=$this->head()?>
    <meta content="" name="author">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="telephone=no" name="format-detection">
    <meta name="robots" content="noodp, noydir">
    <meta name="viewport" content="width=1200">
    <meta name="HandheldFriendly" content="true"><meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9 ]><meta content="no" http-equiv="imagetoolbar"><![endif]-->
    <!--[if IE 8 ]><link href="static/css/main_ie8.min.css" rel="stylesheet" type="text/css"><![endif]-->
    <!--[if IE 9 ]><link href="static/css/main_ie9.min.css" rel="stylesheet" type="text/css"><![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--><link href="static/css/main.min.css" rel="stylesheet" type="text/css"><!--<![endif]-->
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <meta property="og:title" content="default title"><meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="twitter:description" content="" />
    <link rel="image_src" href="" />
    <link rel="icon" type="image/png" href="favicon.ico">
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script><!--[if lt IE 9 ]><script src="static/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar"><![endif]-->
</head>
<body>
<?=$this->beginBody()?>
<header class="header">
    <div class="header__wrapper"><a href="<?=Url::home()?>" title="" class="logo logo--header"></a>
        <div class="description"><span>ХОЛДИНГ АМКОДОР</span><span>Сегодня и всегда</span></div>
        <nav class="top-menu"><a href="<?=Url::home()?>" title="" class="top-menu__item">Главная</a>
            <!-- О компании start-->
            <div class="top-menu__item">О компании</div>
            <div class="top-menu-inside">
                <div class="top-menu-inside__wrapper">
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Холдинг "Амкодор":</div><a href="<?=Url::to(['/cms/default/page','path'=>'istoriya'])?>" title="" class="top-menu-inside__item">История</a><a href="<?=Url::to(['/cms/default/page','path'=>'sostav-holdinga'])?>" title="" class="top-menu-inside__item">Состав холдинга</a><a href="#" title="" class="top-menu-inside__item">Достижения и успехи</a><a href="<?=\yii\helpers\Url::to(["/directorBoard/default","categoryId"=>Board::CATEGORY_AMKADOR_HOLDING])?>" title="" class="top-menu-inside__item">Структура предприятия</a>
                    </div>
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Амкодор-Астана:</div><a href="#" title="" class="top-menu-inside__item">История</a><a href="<?=\yii\helpers\Url::to(["/directorBoard/default","categoryId"=>Board::CATEGORY_AMKADOR_ASTANA])?>" title="" class="top-menu-inside__item">Структура</a><a href="#" title="" class="top-menu-inside__item">Вакансии</a>
                    </div>
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Наши партнеры</div>
                    </div>
                </div>
            </div>
            <!-- О компании end-->
            <!-- Продукция start-->
            <a href="<?=\yii\helpers\Url::to(["/store/category"])?>" title="" class="top-menu__item">Продукция</a>
            <!-- Продукция end-->
            <!-- Клиентам start-->
            <div class="top-menu__item">Клиентам</div>
            <div class="top-menu-inside">
                <div class="top-menu-inside__wrapper">
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Покупка и финансирование:</div><a href="#" title="" class="top-menu-inside__item">Лизинг</a><a href="#" title="" class="top-menu-inside__item">Кредит</a><a href="#" title="" class="top-menu-inside__item">Типовой договор на покупку техники</a>
                    </div>
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Сервис:</div><a href="#" title="" class="top-menu-inside__item">Сервисное-техническое обслуживание</a><a href="#" title="" class="top-menu-inside__item">Гарантийное обслуживание</a><a href="#" title="" class="top-menu-inside__item">Оригинальные запчасти</a>
                    </div>
                    <div class="top-menu-inside__column">
                        <div class="top-menu-inside__title">Пресс центр:</div><a href="<?=Url::to(['/cms/article/list','type'=>\app\modules\cms\models\Article::TYPE_NEWS_ALIAS])?>" title="" class="top-menu-inside__item">Пресс центр</a>
                    </div>
                </div>
            </div>
            <!-- Клиентам end--><a href="<?=Url::to(['/cms/default/page','path'=>'kontakti'])?>" title="" class="top-menu__item">Контакты</a>
        </nav>
    </div>
</header>
<?php if(!in_array(Yii::$app->controller->route,['site/error','store/category/index','store/category/view','store/product/view','store/product/modificator'])):?>
<section class="news-line">
    <div class="news-line__wrapper"><a href="#" title="" class="news-line-item"><img src="<?=$this->theme->getUrl('static/images/content/news-line.jpg')?>" alt="" class="news-line-item__img">
            <div class="news-line-item__description">7250 TTV WARRIOR. Powerful radiance</div></a><a href="#" title="" class="news-line-item"><img src="<?=$this->theme->getUrl('static/images/content/news-line.jpg')?>" alt="" class="news-line-item__img">
            <div class="news-line-item__description">7250 TTV WARRIOR. Powerful radiance</div></a><a href="#" title="" class="news-line-item"><img src="<?=$this->theme->getUrl('static/images/content/news-line.jpg')?>" alt="" class="news-line-item__img">
            <div class="news-line-item__description">7250 TTV WARRIOR. Powerful radiance</div></a><a href="#" title="" class="news-line-item"><img src="<?=$this->theme->getUrl('static/images/content/news-line.jpg')?>" alt="" class="news-line-item__img">
            <div class="news-line-item__description">7250 TTV WARRIOR. Powerful radiance</div></a>
    </div>
</section>
<section id="slider" class="slider">
    <div class="slider-item"><img src="<?=$this->theme->getUrl('static/images/content/slider1.jpg')?>" alt="" class="slider-item__img">
        <div class="slider-item__description">
            <div class="wrapper">
                <div class="slider-item__title">Brand history</div>
                <p>The long tradition of DEUTZ-FAHR is closely associated with one particular name.</p>
                <p>Nicolaus August Otto founded the Motorenfabrik N.A. Otto &amp; Cie.</p>
                <p>Klöckner-Humboldt-Deutz AG (KHD), in Cologne in 1864, and shortly afterwards he invented the first four-stroke combustion engine.</p>
            </div>
        </div>
    </div>
    <div class="slider-item"><img src="<?=$this->theme->getUrl('static/images/content/slider1.jpg')?>" alt="" class="slider-item__img">
        <div class="slider-item__description">
            <div class="wrapper">
                <div class="slider-item__title">Brand history</div>
                <p>The long tradition of DEUTZ-FAHR is closely associated with one particular name.</p>
                <p>Nicolaus August Otto founded the Motorenfabrik N.A. Otto &amp; Cie.</p>
                <p>Klöckner-Humboldt-Deutz AG (KHD), in Cologne in 1864, and shortly afterwards he invented the first four-stroke combustion engine.</p>
            </div>
        </div>
    </div>
    <div class="slider-item"><img src="<?=$this->theme->getUrl('static/images/content/slider1.jpg')?>" alt="" class="slider-item__img">
        <div class="slider-item__description">
            <div class="wrapper">
                <div class="slider-item__title">Brand history</div>
                <p>The long tradition of DEUTZ-FAHR is closely associated with one particular name.</p>
                <p>Nicolaus August Otto founded the Motorenfabrik N.A. Otto &amp; Cie.</p>
                <p>Klöckner-Humboldt-Deutz AG (KHD), in Cologne in 1864, and shortly afterwards he invented the first four-stroke combustion engine.</p>
            </div>
        </div>
    </div>
    <div class="slider-item"><img src="<?=$this->theme->getUrl('static/images/content/slider1.jpg')?>" alt="" class="slider-item__img">
        <div class="slider-item__description">
            <div class="wrapper">
                <div class="slider-item__title">Brand history</div>
                <p>The long tradition of DEUTZ-FAHR is closely associated with one particular name.</p>
                <p>Nicolaus August Otto founded the Motorenfabrik N.A. Otto &amp; Cie.</p>
                <p>Klöckner-Humboldt-Deutz AG (KHD), in Cologne in 1864, and shortly afterwards he invented the first four-stroke combustion engine.</p>
            </div>
        </div>
    </div>
</section>
<?=$content?>
<?php endif;?>


<?php if(in_array(Yii::$app->controller->route,['store/category/index','store/category/view','store/product/view','store/product/modificator'])):?>
    <?=$content?>
<?php endif?>

<?php if(\Yii::$app->controller->route == 'site/error'):?>
    <section class="p404-content"></section>
<?php endif?>

<footer class="footer">
    <div class="footer__wrapper">
        <div class="logo logo--footer"></div>
        <div class="description description--footer"><span>ХОЛДИНГ АМКОДОР</span><span>Сегодня и всегда</span></div>
        <div class="footer__copyright">Copyright © 2015 Все права защищены</div>
        <div class="footer__license">Сайт разработан командой<a href="#" title="">Astanacreative.kz</a></div>
    </div>
</footer>
<div class="mask"></div>
<script src="http://yastatic.net/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="static/js/main.min.js"></script>
<?php $this->endBody()?>
</body>
<?php $this->endPage()?>
</html>