<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 04.09.15
 * Time: 15:24
 */

namespace app\modules\store\controllers;


use app\modules\store\models\Category;
use app\modules\store\models\forms\SparesOrder;
use app\modules\store\models\Product;
use app\modules\store\models\SparesCategory;
use app\modules\store\models\SparesItem;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class SparesController extends Controller{

    public function actionIndex()
    {
        $categoryList = Category::find()->with(['products'])->orderBy(['position' => SORT_ASC])->all();
        if (sizeof($categoryList) == 0) {
            throw new HttpException(404, 'Категория не найдена');
        }
        return $this->render('index',['categoryList'=> $categoryList]);
    }

    public function actionCategory($product)
    {
        $productModel = $this->loadProduct($product);
        return $this->render('category',['product'=>$product]);
    }

    public function actionView($product,$category)
    {
        $product = $this->loadProduct($product);
        $sparesCategory = SparesCategory::findOne(['alias'=>$category]);
        if(!$sparesCategory || !$sparesCategory)
        {
            throw new HttpException('404','Категория запчастей не найдена');
        }
        $sparesList = SparesItem::getSiteData($sparesCategory->id,$product->id);
        return $this->render('view',['product'=>$product,'sparesCategory'=> $sparesCategory,'sparesList'=>$sparesList]);
    }

    protected function loadProduct($alias)
    {
        $model =  Product::findOne(['alias'=>$alias]);
        if(!$model)
        {
            throw new HttpException('404','Товар не найден');
        }
        return $model;
    }

    public function actionOrder()
    {
        $model = new SparesOrder();

        if (\Yii::$app->request->isAjax && $model->load($_POST)) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if($model->load($_POST) && $model->validate())
        {
            $model->send();
        }
        return $this->redirect(\Yii::$app->request->referrer);
    }
}