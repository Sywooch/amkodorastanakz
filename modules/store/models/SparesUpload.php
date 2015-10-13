<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 04.09.15
 * Time: 11:11
 */
namespace app\modules\store\models;


use app\modules\cms\components\Translit;

class SparesUpload extends \yii\base\Model
{
    public $file;
    public $productId;

    public function rules()
    {
        return [
            ['productId','required'],
            [['file'],'file','extensions'=>['csv']]
        ];
    }

    public function attributeLabels()
    {
        return [
            'file'=>'Файл',
        ];
    }

    public function import()
    {
        $f = fopen($this->file->tempName, 'r');
        $result = true;
        $i = 0;
        while ($row = fgetcsv($f, 1024, ';', '"')) {

            array_map('trim', $row);

            foreach ($row as &$v) {
                $v = iconv('windows-1251', 'utf-8', $v);
            }

            list($category, $title, $model) = $row;

            if ($i == 0 && empty($category)) {
                $result = false;
                $this->addError('file', 'Неверный формат файла');
                break;
            }

            $i++;

            $sparesCategory = SparesCategory::findOne(['title'=>$category]);

            if(!$sparesCategory)
            {
                continue;
            }

            $item = SparesItem::find()->where(['title' => $title, 'categoryId' => $sparesCategory->id,'model'=>$model,'productId'=>$this->productId])->one();
            if (!$item) {
                $item = new SparesItem();
            }
            $item->categoryId = $sparesCategory->id;
            $item->productId = $this->productId;
            $item->title = $title;
            $item->model = $model;
            $item->save();
        }

        return $result;
    }
}