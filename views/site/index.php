<?php
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Sistema de Classificação do ENAD - Teste';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Classificação do ENAD</h1>

        <p class="lead">Veja as notas do ENAD por Instituição e Curso.</p>
    </div>

    <div class="body-content">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'label'=>'Instituição',
                'value'=>'idinstitution0.name'
            ],
            [
                'label'=>'Nota da Instituição',
                'value'=>'idinstitution0.grade'
            ],
            'name:text:Nome do Curso',
            'coursegrade',
            'studentgrade',
        ]
    ]); ?>



    </div>
</div>
