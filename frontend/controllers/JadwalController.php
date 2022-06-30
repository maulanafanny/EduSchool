<?php

namespace frontend\controllers;

use common\models\Jadwal;

class JadwalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = new Jadwal();

        return $this->render('index', [
            'models' => $models->find()->all(),
        ]);
    }

    public function actionJadwal($id)
    {
        $this->layout = false;

        $models = new Jadwal();

        $model = $models->findOne(['id' => $id]);

        $senin = explode(",", $model->senin);
        $selasa = explode(",", $model->selasa);
        $rabu = explode(",", $model->rabu);
        $kamis = explode(",", $model->kamis);
        $jumat = explode(",", $model->jumat);

        return $this->render('jadwal', [
            'models' => $models->find()->all(),
            'model' => $model->find()->one(),
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
        ]);
    }
}

?>