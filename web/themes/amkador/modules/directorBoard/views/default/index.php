<?php
/** @var $this \yii\web\View */
/** @var $modelList \app\modules\directorBoard\models\Board[] */
$this->title = 'Структура предприятия';
?>
<section class="structure-content">
    <div class="structure-content__wrapper">
        <h1 class="structure-content__title"><?=$this->title?></h1>
        <h2 class="structure-content__so-title">Совет директоров</h2>
    </div>
    <div class="structure-content-items-list">
        <?php foreach($modelList as $model):?>
        <a href="<?=$model->path?>" title="" class="structure-content-item">
            <div class="structure-content-item__img"><img src="<?=$model->image->resize('194x245')?>" alt=""><span
                    class="structure-content-item__name"><?=$model->title?></span></div>
            <span class="structure-content-item__position">
                <?=$model->post?>
            </span></a>
        <?php endforeach?>
    </div>
</section>