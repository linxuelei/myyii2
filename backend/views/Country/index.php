<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '国家';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView ::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','header' => '序号'],

            //'id',
            'name',
            'population',

            ['class' => 'yii\grid\ActionColumn','header' => '操作'],
        ],
    ]);

    ?>
</div>
