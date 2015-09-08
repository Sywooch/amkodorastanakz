<?php
/**
 * @var $this \yii\web\View
 */
use yii\helpers\Url;
$this->title = 'Главная';
?>
<section id="slider" class="slider"><img src="<?=$this->theme->getUrl('static/images/content/slide-1.jpg')?>" alt="" class="slider__item"><img
        src="<?=$this->theme->getUrl('static/images/content/slide-2.jpg')?>" alt="" class="slider__item"><img src="<?=$this->theme->getUrl('static/images/content/slide-3.jpg')?>"
                                                                                 alt="" class="slider__item"><img
        src="<?=$this->theme->getUrl('static/images/content/slide-4.jpg')?>" alt="" class="slider__item">
</section>
<section class="advantages">
    <div class="advantages__wrapper">
        <div class="advantages__title"><span>НАШИ ПРЕИМУЩЕСТВА</span></div>
        <div class="advantages__item">ПЯТЬ ЛЕТ НАДЕЖНОЙ РАБОТЫ НА РЫНКЕ</div>
        <div class="advantages__item">БЕСПЛАТНАЯ ДОСТАВКА ПО ВСЕМУ КАЗАХСТАНУ</div>
        <div class="advantages__item">100% ГАРАНТИЯ КАЧЕСТВА ТОВАРА</div>
    </div>
</section>
<section class="lineup">
    <div class="lineup__wrapper">
        <div class="lineup__title"><span>Каталог техники</span></div>
                <?php foreach (\app\modules\store\models\Category::find()->all() as $model): ?>
                    <div class="lineup-item">
                        <img src="<?= $model->imageSrc('229x116') ?>" alt="" class="lineup-item__img">

                        <a href="<?= $model->path ?>" title="" class="lineup-item__link"><?= $model->title ?></a>
                        <?php if (($mLink = $model->modificatorLink)): ?>
                            <a href="<?= $mLink ?>" title=""
                               class="lineup-item__modiffer"><?= $model->modificatorTitle ?></a>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
    </div>
</section>
<?=\app\modules\cms\widgets\Feedback::widget()?>
<section class="services">
    <div class="services__wrapper">
        <div class="services__item services__item--service">
            <a href="<?= Url::to(["/cms/default/page",'path'=>'servis']) ?>">
                Сервис
            </a>
        </div>
        <div class="services__item services__item--spares">
            <a href="<?= Url::to(["/store/spares"]) ?>">
                Запчасти
            </a>
        </div>
        <div class="services__item services__item--lease">
            <a href="<?= Url::to(['/cms/default/page', 'path' => 'lizing']) ?>">
                Лизинг
            </a>
        </div>
        <div class="services__banner"><img src="<?=$this->theme->getUrl('static/images/content/banner.jpg')?>" alt=""></div>
    </div>
</section>
<section class="how">
    <div class="how__wrapper">
        <div class="how__title"><span>Как мы работаем</span></div>
        <div class="how__item how__item--consult">Подбор техники и консультация</div>
        <div class="how__item how__item--contract">Заключение договора</div>
        <div class="how__item how__item--delivery">Поставка техники</div>
        <div class="how__item how__item--customer">ДОВОЛЬНЫЙ КЛИЕНТ</div>
        <div class="how__item how__item--service">СЕРВИС</div>
        <div class="how__item how__item--spares">ЗАПЧАСТИ</div>
        <div class="how__item how__item--customer">ДОВОЛЬНЫЙ КЛИЕНТ</div>
    </div>
</section>
<section class="delivery-map">
    <div class="delivery-map__wrapper">
        <div class="delivery-map__title"><span>ДОСТАВКА ПО КАЗАХСТАНУ</span></div>
    </div>
</section>
<?= \app\modules\cms\widgets\Feedback::widget() ?>
<section class="video">
    <div class="video__wrapper">
        <div class="video__title"><span>Видео Amkodor</span></div>
        <div class="video__item">
            <iframe width="555" height="330" src="https://www.youtube.com/embed/-6UVWtRVAx8" frameborder="0"
                    allowfullscreen></iframe>
        </div>
        <div class="video__item">
            <iframe width="555" height="330" src="https://www.youtube.com/embed/yL-rtrYdyhc" frameborder="0"
                    allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="about">
    <div class="about__wrapper">
        <div class="about__title"><span>О компании</span></div>
        <div class="about__content">
            <p>ТОО «Амкодор-Астана» – дистрибьютор холдинга «АМКОДОР» (Республика Беларусь) в Республике Казахстан
                осуществляет продажу дорожно-строительной, коммунальной, сельскохозяйственной, лесной,
                аэродромно-уборочной и другой спецтехники, а также запасных частей к ней. В ассортименте холдинга
                «АМКОДОР» около 90 моделей машин и оборудования. Производство сертифицировано по мировым стандартам СТБ
                ISO 9001-2009 и DINENISO 9001-2008. Продукция холдинга «АМКОДОР» поставляется в 30 стран мира. Покупая
                технику «АМКОДОР» Вы делаете правильный выбор.
            </p>
            <p>«Амкодор» – предприятие с более чем 80-летним опытом производства специальных машин и оборудования. На
                сегодняшний день занимает одну из лидирующих позиций в Беларуси странах СНГ по производству
                дорожно-строительной, сельскохозяйственной, коммунальной, лесной, аэродромно-уборочной и другой
                спецтехники. В ассортименте около 90 моделей машин и оборудования.
            </p>
            <p>«Амкодор» всегда исходит из интересов клиента. Мы убеждены, что это единственно верный путь в стремлении
                стать для каждого из компанией первого выбора. Многие уже сделали этот выбор, отдав предпочтение технике
                марки «Амкодор». Мы готовы к диалогу. Мы открыты для продуктивного сотрудничества теперь и в Республике
                Казахстан.
            </p>
        </div>
    </div>
</section>
<section class="clients">
    <div class="clients__wrapper">
        <div class="clients__title"><span>Наши клиенты</span></div>
        <table class="clients-list">
            <tr class="clients-list__row">
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-1.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-2.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-3.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-4.png')?>" alt=""></td>
            </tr>
            <tr class="clients-list__row">
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-5.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-6.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-7.png')?>" alt=""></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-8.png')?>" alt=""></td>
            </tr>
            <tr class="clients-list__row">
                <td class="clients-list__item"></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-10.png')?>" alt=""></td>
                <td class="clients-list__item"></td>
                <td class="clients-list__item"><img src="<?=$this->theme->getUrl('static/images/content/client-12.png')?>" alt=""></td>
            </tr>
        </table>
    </div>
</section>