<?php

/** @var yii\web\View $this */

$this->title = 'Edu-School | Berita';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h2 style="font-weight: bold; text-align: center">Berita Seputar Sekolah</h2>
    <br>
    <br>

    <?php foreach ($konten as $data) { ?>
        <div class="card shadow">
            <div class="card-body p-4">
                <h3 class="text-body"><a class="text-body" href="<?= Yii::$app->request->baseUrl . '/berita/view?id=' . $data->id ?>"><?= $data->judul ?></a></h3>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <p><?= date('l, d F Y', strtotime($data->created_at)) ?></p>
                        <br>
                        <img src="<?= $data->gambar ?>" class="img-responsive img-thumbnail mb-5">
                    </div>
                    <div class="col-md-9">
                        <p><?= $data->konten ?></p>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <br>
        <br>
    <?php } ?>

</div>