<?php
/**
 * @var $this \yii\base\Widget
 * @var $config Array
 * @var $model \app\modules\cms\models\form\Feedback
 */
use yii\widgets\ActiveForm;
?>
<section class="request-now">
    <div class="request-now__wrapper">
        <div class="request-now__title">ОСТАВИТЬ ЗАЯВКУ ПРЯМО СЕЙЧАС!</div>
        <?php $form = ActiveForm::begin($config) ?>
            <?= $form->field($model, 'name')->textInput() ?>
            <?=$form->field($model,'phone')->textInput()?>
            <input type="submit" value="Сделать заказ" class="request-form__submit request-form__submit--now">
        <?php ActiveForm::end()?>
    </div>
</section>