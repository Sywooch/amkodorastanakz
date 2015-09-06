<?php

namespace app\modules\directorBoard\controllers;

use app\modules\directorBoard\models\Board;
use yii\web\Controller;
use yii\web\HttpException;

class DefaultController extends Controller
{
    public function actionIndex($categoryId)
    {
        $modelList = Board::findByCategory($categoryId);
        return $this->render('index',['modelList'=>$modelList]);
    }

    public function actionView($alias)
    {
        $model = Board::find()->where(['alias'=>$alias])->one();
        if(!$model)
        {
            throw new HttpException('404','Сотрудник не найден');
        }
        return $this->render('view',['model'=>$model]);
    }
}
