<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 18.08.15
 * Time: 11:46
 * @var $this \yii\web\View
 * @var $model \app\modules\store\models\ModificatorCategory
 * @var $modificatorList \app\modules\store\models\ModificatorCategory[]
 * @var $productList \app\modules\store\models\Product[]
 * @var $alias string
 * @var $productAlias string
 */
$this->title = 'Модификатор';
?>
<section class="catalog-table-content">
    <div class="catalog-table-content__wrapper">
        <h1><?=$model->product->title?></h1>
        <div class="catalog-tabs">
            <?php foreach($productList as $product):?>
            <div class="catalog-tabs__item <?=$product->alias == $productAlias?'active':''?>"><?=$product->title?></div>
            <?php endforeach?>
        </div>
        <div class="catalog-tabs-content">
            <?php foreach($productList as $product):?>
            <div class="catalog-tabs-content-box <?=$product->alias==$productAlias ? 'active' : ''?>">
                <?php foreach($product->modificators  as $modificator):?>
                    <div class="catalog-tabs-content__wrapper">
                        <div class="catalog-tabs-content__img"><img src="<?=$modificator->imageSrc('125x68')?>" alt=""></div>
                        <div class="catalog-tabs-content__table">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th colspan="2"><?=$modificator->title?></th>
                                </tr>
                                </thead>
                                <?php if( ($tfoot = $modificator->memo) ):?>
                                <tfoot>
                                <tr>
                                    <td colspan="2"><?=$tfoot?></td>
                                </tr>
                                </tfoot>
                                <?php endif?>

                                <?php if( ($items = $modificator->items) ):?>
                                <tbody>
                                <?php foreach($items as $item):?>
                                    <tr>
                                        <td><?=$item->title?></td>
                                        <td><?=$item->content?></td>
                                    </tr>
                                <?php endforeach?>
                                </tbody>
                                <?php endif?>
                            </table>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>