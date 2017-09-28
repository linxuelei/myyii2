<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '列表';
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\ArrayHelper;
use yii\widgets\LinkPager;

?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        "options" => [
            "id" => "grid"
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //显示的字段
            //code的值
            //['attribute'=>'这是测试code','value'=>function(){return 'abc';}],
            'name',
            'population',
            [
                'label' => '时间',
                'value' => function(){ return date("Y-m-d",time()); },
            ],
            [
                'attribute' => 'name',
                'label'=>'状态',
                'value' => function ($model) {

                    return $model->name ? '1' : '2';
                }
            ],
            ['class' => 'yii\grid\ActionColumn','header' => '操作',],

            [
                'label'=>'更多操作',
                'format'=>'raw',
                'value' => function($data){
                    $url = "http://www.baidu.com?id=";
                    return Html::a('审核', $url, ['title' => '审核','style'=>'color:red']);
                }
            ],

        ],
    ]);

    ?>





</div>
