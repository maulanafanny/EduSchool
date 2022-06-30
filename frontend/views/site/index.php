<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Edu-School | Home';
?>

<div class="home-sec" id="home">
    <div class="overlay">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <div class="flexslider set-flexi" id="main-section">
                        <ul class="slides move-me">

                            <!-- Slider 01 -->
                            <li>
                                <h4>MEMBERI PENDIDIKAN BERKUALITAS</h4>
                                <h1 class="line">INFORMASI TERKINI</h1>
                                <a href="<?= Yii::$app->request->baseUrl . '/berita' ?>" class="btn btn-info btn-lg">
                                    KUNJUNGI HALAMAN
                                </a>
                                <a href="#features-sec" class="btn btn-success btn-lg">
                                    DAFTAR FITUR
                                </a>
                            </li>
                            <!-- End Slider 01 -->

                            <!-- Slider 02 -->
                            <li>
                                <h4>MEMBERI PENDIDIKAN BERKUALITAS</h4>
                                <h1 class="line">ACARA MENDATANG</h1>
                                <a href="<?= Yii::$app->request->baseUrl . '/event' ?>" class="btn btn-success btn-lg">
                                    KUNJUNGI HALAMAN
                                </a>
                                <a href="#faculty-sec" class="btn btn-danger btn-lg">
                                    STAFF KAMI
                                </a>
                            </li>
                            <!-- End Slider 02 -->

                            <!-- Slider 03 -->
                            <li>
                                <h4>MEMBERI PENDIDIKAN BERKUALITAS</h4>
                                <h1 class="line">JADWAL & AGENDA</h1>
                                <a href="<?= Yii::$app->request->baseUrl . '/jadwal/index' ?>" class="btn btn-warning btn-lg">
                                    KUNJUNGI HALAMAN
                                </a>
                                <a href="#course-sec" class="btn btn-info btn-lg">
                                    VISI & MISI
                                </a>
                            </li>
                            <!-- End Slider 03 -->

                            <!-- Slider 04 -->
                            <li>
                                <h4>MEMBERI PENDIDIKAN BERKUALITAS</h4>
                                <h1 class="line">GALERI DOKUMENTASI</h1>
                                <a href="<?= Yii::$app->request->baseUrl . '/galeri' ?>" class="btn btn-secondary btn-lg">
                                    KUNJUNGI HALAMAN
                                </a>
                                <a href="#contact-sec" class="btn btn-info btn-lg">
                                    BERI MASUKAN
                                </a>
                            </li>
                            <!-- End Slider 04 -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--HOME SECTION END-->

<div class="tag-line">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 data-scroll-reveal="enter from the bottom after 0.1s" class="my-4 py-0"><i class="fa fa-circle-o-notch"></i>
                    SELAMAT DATANG DI EDU-SCHOOL <i class="fa fa-circle-o-notch"></i></h2>
            </div>
        </div>
    </div>
</div>
<!--HOME SECTION TAG LINE END-->

<div id="features-sec" class="container set-pad">
    <div class="row text-center justify-content-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line line">DAFTAR FITUR</h1>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo.
            </p>
        </div>
    </div>
    <!--/.HEADER LINE END-->

    <div class="row">
        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
            <div class="about-div">
            <a href="<?= Yii::$app->request->baseUrl . '/pengumuman' ?>"><i class="fa fa-file-o fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">PENGUMUMAN</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/pengumuman' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>

        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="about-div">
                <a href="<?= Yii::$app->request->baseUrl . '/jadwal/index' ?>"><i class="fa fa-calendar fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">JADWAL PELAJARAN</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/jadwal/index' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>

        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
            <div class="about-div">
                <a href="<?= Yii::$app->request->baseUrl . '/event' ?>"><i class="fa fa-magic fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">EVENT MENDATANG</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/event' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>

        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
            <div class="about-div">
                <a href="<?= Yii::$app->request->baseUrl . '/berita' ?>"><i class="fa fa-paper-plane-o fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">BERITA</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/berita' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>

        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
            <div class="about-div">
                <a href="<?= Yii::$app->request->baseUrl . '/site/about' ?>"><i class="fa fa-trophy fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">TENTANG KAMI</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/site/about' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>

        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
            <div class="about-div">
                <a href="<?= Yii::$app->request->baseUrl . '/galeri' ?>"><i class="fa fa-photo fa-4x icon-round-border shadow"></i></a>
                <h3 class="mt-3">GALERI</h3>
                <hr />
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
                <a href="<?= Yii::$app->request->baseUrl . '/galeri' ?>" class="btn btn-info btn-set shadow">KUNJUNGI HALAMAN >></a>
            </div>
        </div>
    </div>
</div>
<!-- FEATURES SECTION END-->

<br>

<div id="faculty-sec">
    <div class="container set-pad">
        <div class="row text-center justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line line">STAFF KAMI</h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <img style="max-width: 200px;" src="<?= Yii::$app->request->baseUrl . '/img/user.png' ?>" class="rounded" />
                    <h3 class="mt-3" style="text-transform: none;">Drs. DGB Irawan M.M.</h3>
                    <hr />
                    <h5 class="font-weight-bold" style="line-height: 30px">Kepala <br> Sekolah</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                    </p>
                </div>
            </div>

            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="faculty-div">
                    <img style="max-width: 200px;" src="<?= Yii::$app->request->baseUrl . '/img/user.png' ?>" class="rounded" />
                    <h3  class="mt-3" style="text-transform: none;">Drs. Budiyana</h3>
                    <hr />
                    <h5 class="font-weight-bold" style="line-height: 30px">Wakasek <br> Kurikulum</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>
            </div>

            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="faculty-div">
                    <img style="max-width: 200px;" src="<?= Yii::$app->request->baseUrl . '/img/user.png' ?>" class="rounded" />
                    <h3  class="mt-3" style="text-transform: none;">Sularto, S.Pd.</h3>
                    <hr />
                    <h5 class="font-weight-bold" style="line-height: 30px">Wakasek <br> Kesiswaan</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>
            </div>

            <div></div>
        </div>
    </div>
</div>
<!-- FACULTY SECTION END-->

<div id="course-sec" class="container set-pad">
    <div class="row text-center justify-content-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line line">TENTANG KAMI</h1>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo.
            </p>
        </div>
    </div>
    <!--/.HEADER LINE END-->

    <div class="row set-row-pad justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
            <img src="<?= Yii::$app->request->baseUrl . '/img/smasa1.png' ?>" class="img-thumbnail shadow" />
        </div>
        <div id="accordion" class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="card shadow-sm" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <a class="btn btn-link collapsed px-0 py-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong>VISI</strong>
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        ”Terwujudnya Sumber Daya Manusia yang Bertakwa, Berbudaya, Bermutu Internasional dan Berwawasan Lingkungan”
                    </div>
                </div>
            </div>
            <div class="card shadow-sm" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="btn btn-link collapsed px-0 py-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>MISI</strong>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ol style="padding-left: 15px;">
                            <li>Meningkatkan pemahaman dan pengamalan ajaran agama</li>
                            <li>Menjunjung tinggi moral dan etika, serta menjalin hubungan baik dengan semua pihak.</li>
                            <li>Membudayakan tertib belajar dan tertib bekerja</li>
                            <li>Membudayakan berpikir positif, bertindak positif dan sikap saling peduli</li>
                            <li>Melaksanakan proses pembelajaran yang efektif, efisien, kreatif dan inovatif</li>
                            <li>Mengintensifkan pembinaan sains, olah raga dan seni</li>
                            <li>Menciptakan suasana kompetitif yang positif</li>
                            <li>Menciptakan sekolah yang hijau dan asri.</li>
                            <li>Menciptakan budaya bersih dan cinta lingkungan dengan cara melindungi, memelihara lingkungan serta mencegah pencemaran lingkungan</li>
                            <li>Mengintensifkan budaya bebas dari rokok, narkoba dan kekerasan</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card mb-2 shadow-sm" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <a class="btn btn-link collapsed px-0 py-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>SEJARAH SINGKAT</strong>
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        SMA Negeri 1 Temanggung merupakan sekolah menengah atas tertua di Kabupaten Temanggung. Sekolah ini didirikan
                        pada 15 Oktober 1959 oleh The Joe Gwan, seorang warga keturunan Tionghoa yang prihatin melihat lulusan SMP di
                        Kabupaten Temanggung harus meneruskan sekolahnya di luar kota karena tidak adanya SMA di kota Temanggung. SMA
                        Negeri 1 Temanggung terletak di Jalan Kartini Nomor 4 Temanggung, Jawa Tengah.
                    </div>
                </div>
            </div>
            <div class="alert alert-info shadow-sm" data-scroll-reveal="enter from the bottom after 1.1s">
                <a style="font-size:30px;" href="<?= Yii::$app->request->baseUrl . '/site/about' ?>">
                    <strong> Selengkapnya </strong>
                    <hr />
                    >>>>>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- COURSES SECTION END-->

<div id="contact-sec">
    <div class="overlay">
        <div class="container set-pad">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line line">HUBUNGI KAMI</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>
            </div>
            <!--/.HEADER LINE END-->

            <div class="row set-row-pad justify-content-center" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required" placeholder="Nama Lengkap" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required" placeholder="Alamat Email" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row set-row-pad justify-content-center">
        <div class="col-lg-5 col-md-5 col-sm-5 mr-5" data-scroll-reveal="enter from the bottom after 0.4s">
            <h3><strong>Alamat Kami</strong></h3>
            <hr />
            <div>
                <h5>Jawa Tengah, Temanggung</h5>
                <h5>Jl. Kartini No 04 Temanggung</h5>
                <h5><strong>Telepon:</strong> 0293491159</h5>
                <h5><strong>Email: </strong>sman1temanggung@gmail.com</h5>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 ml-5" data-scroll-reveal="enter from the bottom after 0.4s">
            <h3><strong>Media Sosial</strong></h3>
            <hr />
            <div>
                <a href="<?= Url::to('https://www.facebook.com/fannymaulana.rizky')?>"> <img src="<?= Yii::$app->request->baseUrl . '/img/facebook.png' ?>" alt="" /> </a>
                <a href="<?= Url::to('https://www.youtube.com/channel/UCSSKHniKisPnLcMTSbulJfw')?>"> <img style="height: 80px; width: 80px;" src="<?= Yii::$app->request->baseUrl . '/img/youtube.png' ?>" alt="" /></a>
                <a href="<?= Url::to('https://twitter.com/maulanafann')?>"> <img src="<?= Yii::$app->request->baseUrl . '/img/twitter.png' ?>" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT SECTION END-->