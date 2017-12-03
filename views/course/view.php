<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title = $model->idcourse;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->idcourse], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idcourse], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar esse curso?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcourse',
            'idinstitution',
            'name',
            'coursegrade',
            'studentgrade',
        ],
    ]) ?>

</div>
