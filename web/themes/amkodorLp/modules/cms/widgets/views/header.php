<?php
/**
 * @var $this \yii\base\Widget
 * @var $config Array
 * @var $model \app\modules\cms\models\form\Feedback
 */
use yii\widgets\ActiveForm;
$config['options'] = ['class'=>'request-form'];
?>
<section class="request">
    <div class="request__title">Оставить Заявку!</div>
    <div class="request__description">на подбор Европейской спецтехники прямо сейчас и мы свяжемся с
        Вами в течении 30 минут
    </div>
    <?php $form = ActiveForm::begin($config) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'phone')->textInput() ?>
    <input type="submit" value="Сделать заказ" class="request-form__submit request-form__submit--now">
    <?php ActiveForm::end() ?>
</section>