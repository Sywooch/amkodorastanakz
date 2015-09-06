<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 25.07.15
 * Time: 21:06
 */

namespace app\modules\cms\widgets;

use \Yii;
use yii\base\Widget;
use yii\helpers\Url;

class Feedback extends Widget{

    public $template = 'default';

    public function run()
    {
        $model = new \app\modules\cms\models\form\Feedback();
        $config = [
            'action'=>['/cms/default/feedback'],
            'enableAjaxValidation'=>true,
            'options'=>[
                'class'=>'request-form request-form--now'
            ],
            'fieldConfig'=>[
                'labelOptions'=>[
                    'class'=>'request-form__label',
                ],
                'inputOptions'=>[
                    'class'=>'request-form__input',
                ],
                'options'=>[
                    'class'=>'request-form__row',
                ]
            ],
        ];
        return $this->render($this->template,['model'=>$model,'config'=>$config]);
    }

}