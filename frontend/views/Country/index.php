<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '列表';
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\ArrayHelper;

?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'population',
            //['label' => '功能管理'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
