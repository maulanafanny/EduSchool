<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'selasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rabu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kamis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
