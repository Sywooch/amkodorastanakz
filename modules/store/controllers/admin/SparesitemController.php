<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 04.09.15
 * Time: 15:07
 */

namespace app\modules\store\controllers\admin;


use app\modules\cms\controllers\admin\AdminController;
use app\modules\store\models\SparesItem;

class SparesitemController extends AdminController{

    public function actionDelete($id)
    {
        $model = SparesItem::findOne($id);
        if($model)
        {
            $model->delete();
        }
        return $this->redirect(['/store/admin/product/update','id'=>$model->productId,'tab'=>'spares']);
    }

}