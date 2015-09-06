<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
/* @var $this yii\web\View */
/* @var $model app\modules\cms\models\Page */

$this->title = Yii::t('app', 'Редактирование: ') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Страницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-update">

    <?php
    echo Tabs::widget([
        'items' => [
            [
                'id' => 'one',
                'label' => 'Основные данные',
                'content' => $this->render('_form', [
                    'model' => $model,
                ]),
                'active' => true
            ],
            [
                'id' => 'two',
                'label' => 'Картинки',
                'content' => \app\modules\cms\widgets\ImageUpload::widget(['model' => $model, 'primaryKey' => $model->id, 'maxNumberOfFiles' => 1]),
            ],
        ],
    ]);
    ?>
</div>
