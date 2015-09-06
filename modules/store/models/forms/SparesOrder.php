<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 04.09.15
 * Time: 16:44
 */

namespace app\modules\store\models\forms;


use app\modules\store\models\SparesItem;
use yii\base\Model;

class SparesOrder extends Model{

    public $name;
    public $email;
    public $phone;
    public $organization;
    public $productId;

    public function rules()
    {
        return [
          [['name','email','phone','organization','productId'],'required'],
            [['email'], 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
          'name'=>'Имя',
          'email'=>'Email',
          'phone'=>'Телефон',
          'organization'=>'Организация',
        ];
    }

    public function send()
    {
        $subject = 'Новый заказ с сайта '.\Yii::$app->name;
        $sparesItem = SparesItem::findOne($this->productId);
        return \Yii::$app->mailer->compose('store/spares/order',['model'=>$this,'subject'=>$subject,'sparesItem'=>$sparesItem])
            ->setFrom(\Yii::$app->params['email']->from)
            ->setTo(\Yii::$app->params['email']->to)
            ->setSubject($subject)
            ->send();
    }
}