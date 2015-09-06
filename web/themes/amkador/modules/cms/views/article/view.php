<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article;
 */
$this->title = $item->title;
?>
<article class="page-content">
    <div class="page-content__wrapper">
        <h1><?=$item->title?></h1>
        <?=$item->description?>
    </div>
</article>
