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
        <div class="row">
            <div class="col-md-3 col-md-offset-8">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="query" class="form-control" id="query" aria-describedby="query" placeholder="Buscar">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
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
                    ],
                    'summary'=>''
                ]); ?>
            </div>
        </div>
    </div>
</div>
