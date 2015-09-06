<?php

namespace app\modules\store\models;

use app\modules\cms\components\TranslitBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%spares_category}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $alias
 */
class SparesCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%spares_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title', 'alias'], 'string', 'max' => 128],
            ['alias','unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Название'),
            'description' => Yii::t('app', 'Описание'),
            'alias' => Yii::t('app', 'Alias'),
        ];
    }

    public function behaviors()
    {
        return [
          'translit'=>[
              'class'=>TranslitBehavior::className(),
          ],
        ];
    }

    public static function dropDown()
    {
        $items = self::find()->all();
        return ArrayHelper::map($items,'id','title');
    }
}
