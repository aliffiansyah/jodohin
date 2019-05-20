<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NotifikasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifikasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDNOTIFIKASI') ?>

    <?= $form->field($model, 'IDPENGIRIMNOTIF') ?>

    <?= $form->field($model, 'IDTYPENOTIFIKASI') ?>

    <?= $form->field($model, 'IDPENERIMANOTIF') ?>

    <?= $form->field($model, 'ISI') ?>

    <?php // echo $form->field($model, 'WAKTUNOTIFIKASI') ?>

    <?php // echo $form->field($model, 'STATUSNOTIFIKASI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
