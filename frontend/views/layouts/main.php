<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark fixed-top font-weight-bold shadow-lg',
            'style' => 'background-color: rgba(28, 43, 75, 1); min-height: 70px; letter-spacing: 1px; font-size: 12.5px;'
        ],
    ]);
    $menuItems = [
        ['label' => 'HOME', 'url' => ['/site/index']],
        [
            'label' => 'MENU',
            'url' => '#',
            'items' => [
                ['label' => 'Pengumuman', 'url' => Yii::$app->request->baseUrl . '/pengumuman/index'],
                ['label' => 'Jadwal Pelajaran', 'url' => Yii::$app->request->baseUrl . '/jadwal/index'],
                ['label' => 'Event', 'url' => Yii::$app->request->baseUrl . '/event/index'],
                ['label' => 'Berita', 'url' => Yii::$app->request->baseUrl . '/berita/index'],
                ['label' => 'Galeri', 'url' => Yii::$app->request->baseUrl . '/galeri/index'],
            ],
        ],
        ['label' => 'ABOUT', 'url' => ['/site/about']],
        ['label' => 'CONTACT', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'SIGNUP', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'LOGIN', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li class="my-auto">'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'LOGOUT (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout font-weight-bold', 'style' => 'font-size: 12.5px; letter-spacing: 1px;']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
