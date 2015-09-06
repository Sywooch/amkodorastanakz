<?php
/**
 * @var $this \yii\web\View
 * @var $page \app\modules\cms\models\Page;
 */
$this->title = $page->title;
?>
<article class="page-content">
    <div class="page-content__wrapper">
        <?=$page->description?>
    </div>
</article>
