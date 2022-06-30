<?php

/** @var yii\web\View $this */

$this->title = 'Edu-School | Galeri';
$this->params['breadcrumbs'][] = $this->title;
?>

<br><br>
<h2 class="text-center font-weight-bold">Galeri Dokumentasi</h2>
<br>


<section class="imageCollage">

    <?php foreach ($models as $gambar) { ?>
        <img class="img-hover" src="/EduSchool/common/upload/<?= $gambar->direktori ?>?>">
    <?php } ?>
    
</section>

<br>