<?php
/**
 * @var $this \yii\base\Widget
/* @var $modelProduct Product
/* @var $searchModel app\modules\store\models\ModificatorCategorySearch
/* @var $dataProvider yii\data\ActiveDataProvider
 */
?>

<div class="modificator-category-index">

    <h1>Запчасти</h1>

    <div class="well">
        <?php $form = \yii\bootstrap\ActiveForm::begin([
            'action'=>['/store/admin/sparescategory/import'],
            'enableAjaxValidation'=>true,
            'options'=>[
                'enctype'=>'multipart/form-data',
                'class'=>'form-inline'
            ],
        ])?>
        <?=\yii\helpers\Html::activeHiddenInput($modelUpload,'productId',['value'=>$modelProduct->id])?>
        <?=$form->field($modelUpload,'file')->fileInput()?>
        <?=\yii\helpers\Html::submitButton('Загрузить',['class'=>'btn btn-success'])?>
        <?php \yii\bootstrap\ActiveForm::end()?>
    </div>

    <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'model',
            'price',
            // 'alias',
            // 'memo',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{delete}',
                'buttons'=>[
                    'delete'=>function($url,$model)
                    {
                        return \yii\helpers\Html::a('Удалить',['/store/admin/sparesitem/delete','id'=>$model->id],['data-method'=>'post']);
                    }
                ]
            ],
        ],
    ]); ?>

</div>
