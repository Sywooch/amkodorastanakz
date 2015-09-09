<?php
/**
 * @var $this \yii\web\View
 * @var $page \app\modules\cms\models\Page
 */
$this->title = $page->title;
?>
<div class="inside-page-content">
    <div class="inside-page-content__wrapper">
        <?php if( ($image = $page->image) ):?>
        <div class="inside-page-content-bg">
            <img src="<?=$image->resize('1160x249',\alexBond\thumbler\Thumbler::METHOD_NOT_BOXED)?>" alt="">
        </div>
        <?php endif?>
        <?=$page->description?>
    </div>
</div>