<?php
/**
 * @var $model \app\modules\store\models\forms\SparesOrder
 */
use yii\widgets\ActiveForm;
?>
<div id="request" class="modal request">
    <div class="modal__close"></div>
    <div class="request__title">Заказать!</div>
    <?php $form = ActiveForm::begin([
        'action' => ['/store/spares/order'],
        'options' => ['class' => 'request-form'],
        'enableAjaxValidation' => true,
        'fieldConfig' => [
            'template' => '{label}{input}{error}',
            'inputOptions' => ['class' => 'request-form__input'],
            'labelOptions' => ['class'=>'request-form__label']
         ],
    ]) ?>
        <?=\yii\helpers\Html::activeHiddenInput($model,'productId')?>
        <?=$form->field($model,'name')?>
        <?=$form->field($model,'phone')?>
        <?=$form->field($model,'email')?>
        <?=$form->field($model,'organization')?>
        <input type="submit" value="Сделать заказ" class="request-form__submit">
    <?php ActiveForm::end()?>
</div>