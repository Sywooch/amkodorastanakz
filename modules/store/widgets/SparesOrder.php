<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 04.09.15
 * Time: 17:00
 */

namespace app\modules\store\widgets;


use yii\base\Widget;

class SparesOrder extends Widget{

    public function run()
    {
        $model = new \app\modules\store\models\forms\SparesOrder();
        return $this->render('sparesOrderView',['model'=>$model]);
    }

}