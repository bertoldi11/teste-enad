<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institution */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'InstituiçÕes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institution-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->idinstitution], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idinstitution], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar essas instituição?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'grade',
        ],
    ]) ?>

</div>
