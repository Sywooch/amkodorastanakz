<?php
/**
 * @var $this \yii\web\View
 * @var $categoryList \app\modules\store\models\Category[]
 */
$this->title = 'Каталог';
?>
<section class="catalog-content">
    <div class="catalog-content__wrapper">
        <h1 class="catalog-content__title">КАТАЛОГ ПРОДУКЦИИ</h1>
        <section class="lineup">
            <div class="lineup__wrapper">
                <?php foreach($modelList as $model):?>
                <div class="lineup-item">
                    <img src="<?=$model->imageSrc('229x116')?>" alt="" class="lineup-item__img">
                    <a href="<?=$model->path?>" title="" class="lineup-item__link"><?=$model->title?></a>
                    <?php if( ($mLink = $model->modificatorLink) ):?>
                    <a href="<?=$mLink?>" title="" class="lineup-item__modiffer"><?=$model->modificatorTitle?></a>
                    <?php endif?>
                </div>
                <?php endforeach?>
            </div>
        </section>
    </div>
</section>