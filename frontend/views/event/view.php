<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- <div class="event-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'tanggal',
            'lokasi',
            'deskripsi:ntext',
            'gambar',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div> -->

<div class="container mt-2">
    <h1 class="mb-4 text-capitalize"><?= $model->nama ?></h1>
    <a href="<?= Yii::$app->request->referrer ?>" style="border-radius: 10px; background-color: rgba(28, 43, 75, 1);" class="btn btn-dark mb-4 p-2 shadow"><i class="fa fa-long-arrow-left mr-2"></i>Kembali ke Daftar Event</a>
    <div class="row">
        <div class="col">
            <div class="card shadow" style="max-width: 500px">
                <img src="<?= $model->gambar ?>">
            </div>
        </div>
        <div class="col mt-5">
            <ul class="list-group mt-3 ml-3">
                <li style="list-style: none; font-size:25px;" class="mb-2 fs-3">
                    <!-- <i class="fa fa-calendar"></i> -->
                    <strong>Tanggal</strong> : 
                    <?= date('l, d F Y', strtotime($model->tanggal)) ?>
                </li>
                <li style="list-style: none; font-size:25px;" class="mb-2 fs-3">
                    <!-- <i class="fa fa-clock-o mr-2"></i> -->
                    <strong>Waktu</strong> : 
                    <?= date('H:i - ', strtotime($model->tanggal)) ?>
                    <?= date('H:i',strtotime('+2 hour',strtotime($model->tanggal))) ?>
                </li>
                <li style="list-style: none; font-size:25px;" class="mb-2 text-capitalize">
                    <!-- <i class="fa fa-location-arrow mr-2"></i> -->
                    <strong>Lokasi</strong> : 
                    <?= $model->lokasi ?>
                </li>
                <br>
                <li style="list-style: none; font-size:20px;">
                    <?= $model->deskripsi ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<br>
