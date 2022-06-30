<?php

namespace frontend\controllers;

use yii\base\Controller;
use common\models\Galeri;

class GaleriController extends Controller {
    public function actionIndex()
    {
        $models = new Galeri;

        return $this->render('index', [
            'models' => $models->find()->all()
        ]);
    }
}

?>