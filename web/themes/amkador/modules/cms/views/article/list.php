<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 18.08.15
 * Time: 17:15
 * @var $this \yii\web\View
 * @var $items \app\modules\cms\models\Article[]
 */
$this->title = 'Пресс-центр';
?>
<section class="product-list-content">
    <div class="product-list-content__wrapper">
        <h1><?=$this->title?></h1>
        </aside>
        <div class="product-list-content-list">
            <?php foreach($items as $item):?>
                <div class="product-list-content-list-item">
                    <img src="<?=$item->imageSrc('150x95',\alexBond\thumbler\Thumbler::METHOD_CROP_CENTER)?>" alt="" class="product-list-content-list-item__img">
                    <a href="<?=$item->path?>" title="" class="product-list-content-list-item__title"><?=$item->title?></a>
                    <p class="product-list-content-list-item__text"><?=\yii\helpers\Html::encode($item->shortext(300))?></p>
                </div>
            <?php endforeach?>
        </div>
    </div>
</section>