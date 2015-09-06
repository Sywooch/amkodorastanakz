<?php
/**
 * @var $this \yii\web\View
 * @var $product \app\modules\store\models\Product
 * @var $sparesCategory \app\modules\store\models\SparesCategory
 * @var $sparesList \app\modules\store\models\SparesItem[]
 */
$this->title = $sparesCategory->title;
?>
<section class="spare-part-content">
    <div class="spare-part-content__wrapper">
        <div class="spare-part-content__title"><?=$sparesCategory->title?></div>
        <?=$sparesCategory->description?>

        <?php foreach($sparesList as $sparesTitle => $spares):?>
        <h2><?=$sparesTitle?></h2>
        <?php if( !empty($spares['items']) ):?>
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>ЦЕНА</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($spares['items'] as $item):
                    /** @var $item \app\modules\store\models\SparesItem */?>
                <tr>
                    <td><?=$item->model?></td>
                    <td><?=$item->price?></td>
                    <td>
                        <a href="#request" title="" data-click="modal" data-id="<?=$item->id?>" class="_sparesOrder">Заказать</a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <?php endif?>
        <?php endforeach?>
    </div>
</section>