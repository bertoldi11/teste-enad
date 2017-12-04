<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form yii\widgets\ActiveForm */
/* @var $institutions [app\models\Institution] */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idinstitution')->dropDownList( ArrayHelper::map($institutions, 'idinstitution', 'name')) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'coursegrade')->textInput() ?>

    <?= $form->field($model, 'studentgrade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
