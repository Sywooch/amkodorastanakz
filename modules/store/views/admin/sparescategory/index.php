<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Категории запчастей');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spares-category-index">


    <p>
        <?= Html::a(Yii::t('app', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description:ntext',
            ['attribute'=>'alias','value'=>function($model){
                return htmlspecialchars("<?=Url::to(['/store/spares/view','product'=>\$product,'category'=>'$model->alias'])?>");
            },'format'=>'html'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
