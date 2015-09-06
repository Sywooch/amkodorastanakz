<?php
/**
 * @var $this \yii\web\View
 * @var $page \app\modules\cms\models\Page
 */
$this->title = $page->title;
?>
<div class="inside-page-content">
    <div class="inside-page-content__wrapper">
        <?=$page->description?>
    </div>
</div>