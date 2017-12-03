<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title = 'Update Course: ' . $model->idcourse;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcourse, 'url' => ['view', 'id' => $model->idcourse]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
