<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Galeri;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GaleriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Galeri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'direktori',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Galeri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
