<?php
/**
 * @var $subject string
 * @var $model \app\modules\store\models\forms\SparesOrder
 * @var $sparesItem \app\modules\store\models\SparesItem
 */
?>
<h1><?=$subject?></h1>

<p>
    <strong>Запчасть:</strong> <?=$sparesItem->title?> <br/>
    <strong>Модель:</strong> <?=$sparesItem->model?> <br/>
    <strong>Цена:</strong> <?=$sparesItem->price?> <br/>
</p>

<ul>
    <li>
        <strong>Имя:</strong> <?=$model->name?>
    </li>
    <li>
        <strong>Телефон:</strong> <?= $model->phone ?>
    </li>
    <li>
        <strong>Email:</strong> <?= $model->email ?>
    </li>
    <li>
        <strong>Организация:</strong> <?= $model->organization ?>
    </li>
</ul>