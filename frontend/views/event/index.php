<?php

/** @var yii\web\View $this */

$this->title = 'Edu-School | Event';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container mb-5">
    <h2 class="text-center font-weight-bold">Daftar Event</h2>
</div>

<!-- Cards -->
<div class="container-fluid">
    <div class="col card-deck justify-content-center">
        <?php foreach ($events as $data) { ?>
            <div class="row-mb-5">
                <a class="card shadow mb-5 big text-decoration-none text-dark" style="min-width: 253px; max-width: 350px" href="<?= Yii::$app->request->baseUrl . '/event/view?id=' . $data->id ?> ?>">
                    <img src="<?= $data->gambar ?>" style="background-color: #f1f3f298; max-height: 550px" class="card-img-top">
                    <div class="card-body">
                        <h5 class="text-capitalize"><strong><?= $data->nama ?></strong></h5>
                        <ul class="list-group mt-3">
                            <li style="list-style: none" class="mb-2 text-capitalize">
                                <i class="fa fa-calendar mr-2" style="font-size:20px;"></i>
                                <?= date('l, d F Y', strtotime($data->tanggal)) ?>
                            </li>
                            <li style="list-style: none" class="mb-2 text-capitalize">
                                <i class="fa fa-location-arrow mr-2" style="font-size:20px;"></i>
                                <?= $data->lokasi ?>
                            </li>
                            <li style="list-style: none">
                                <?= $data->deskripsi ?>
                            </li>
                        </ul>
                    </div>
                </a>
        </div>
        <?php } ?>
    </div>
    <br>
</div>