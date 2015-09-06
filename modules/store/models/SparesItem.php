<?php

namespace app\modules\store\models;

use Yii;

/**
 * This is the model class for table "{{%spares_item}}".
 *
 * @property integer $id
 * @property integer $categoryId
 * @property integer $productId
 * @property string $title
 * @property string $model
 * @property string $price
 */
class SparesItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%spares_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId','productId'], 'integer'],
            [['title', 'model'], 'string', 'max' => 128],
            [['price'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'categoryId' => Yii::t('app', 'Категория'),
            'title' => Yii::t('app', 'Товар'),
            'model' => Yii::t('app', 'Модель'),
            'price' => Yii::t('app', 'Цена'),
            'productId' => Yii::t('app', 'Товар'),
        ];
    }

    /**
     * @param $categoryId
     * @param $productId
     * @return SparesItem[]
     */
    public static function getSiteData($categoryId,$productId)
    {
        $items = SparesItem::find()->where(['productId'=>$productId,'categoryId'=>$categoryId])->all();
        $data = [];
        foreach($items as $item)
        {
            $data[$item->title]['items'][] = $item;
        }
        return $data;
    }
}
