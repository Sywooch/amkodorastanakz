<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 14.08.15
 * Time: 14:40
 */

namespace app\modules\store\widgets\admin;


use app\modules\store\models\SparesItem;
use app\modules\store\models\SparesUpload;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class Spares extends Widget{
    public $model;
    public function run()
    {
        $modelUpload = new SparesUpload();
        $query = SparesItem::find()->where(['productId'=>$this->model->id]);
        $dataProvider = new ActiveDataProvider([
           'query'=>$query,
        ]);

        return $this->render('sparesView', [
            'dataProvider' => $dataProvider,
            'modelUpload'=>$modelUpload,
            'modelProduct'=>$this->model,
        ]);
    }

}