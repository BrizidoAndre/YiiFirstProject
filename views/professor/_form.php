<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Professor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="professor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'materia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idLogin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
