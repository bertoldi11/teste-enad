<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $institutions [app\models\Institution] */

$this->title = 'Cadastrar novo Curso';
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'institutions'=>$institutions
    ]) ?>

</div>
