<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\store\models\SparesCategory */

$this->title = 'Обновление - '.$model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категории запчастей'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновление');
?>
<div class="spares-category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
