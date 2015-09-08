<?php
/** @var $this \yii\web\View */
/** @var $q string */
/** @var $route string */
/** @var $categoryList \app\modules\store\models\Category[] */
$this->title = 'Запчасти';
?>
<section class="catalog-content">
    <div class="catalog-content__wrapper">
        <h1 class="catalog-content__title">Запчасти</h1>
        <?php foreach ($categoryList as $categoryItem): ?>
        <div class="catalog-content-item">
            <img src="<?=$categoryItem->imageSrc('229x116')?>" alt="" class="catalog-content-item__img">
            <div class="catalog-content-item__hover">
                <a href="<?= $categoryItem->path ?>" title="" class="catalog-content-item__link"><?=$categoryItem->title?></a>
                <?php if (($categoryProducts = $categoryItem->products)): ?>
                <div class="catalog-content-item-drop">
                    <?php foreach ($categoryProducts as $categoryProduct): ?>
                        <a href="<?= $categoryProduct->sparesPath ?>" title="" class="catalog-content-item-drop__item"><?= $categoryProduct->title ?></a>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</section>