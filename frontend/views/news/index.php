<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <ul>
    <?php foreach ($News as $News): ?>
        <li>
            <?= Html::encode("{$News->title} ({$News->auth})") ?>:
            <?= $News->content ?>
        </li>
    <?php endforeach; ?>
    </ul>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
