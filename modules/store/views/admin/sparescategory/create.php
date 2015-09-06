<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\store\models\SparesCategory */

$this->title = Yii::t('app', 'Добавление');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категории запчастей'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spares-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
