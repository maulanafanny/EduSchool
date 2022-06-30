<?php

/** @var yii\web\View $this */

$this->title = 'Edu-School | Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <h2 class="text-center font-weight-bold">Daftar Pengumuman</h2>
    <br>
    <?php foreach ($pengumuman as $data) { ?>
        <div class="card ann-hover">
            <div class="card-body row mx-3 my-3">
                <div class="col-10 my-auto">
                    <h3><?= $data->judul ?></h3>
                    <p class="mb-4"><?= $data->deskripsi ?></p>
                    <p class="mb-0 pb-0" style="line-height: 28px;"><small>Dibuat Oleh <?= $data->creator ?></small></p>
                    <p class="mb-0 pb-0" style="line-height: normal;"><small><?= date('l, d F Y', strtotime($data->tanggal)) ?></small></p>
                </div>
                <a class="col-2" href="<?= $data->link ?>"><i class="fa fa-download fa-4x icon-round-border shadow-sm"></i></a>
            </div>
        </div>
    <?php } ?>
</div>