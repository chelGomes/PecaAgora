<!-- views/funcionario/index.php -->

<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Lista de Funcionários';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => $funcionarios,
    ]),
    'columns' => [
        'id',
        'nome',
        'cpf',
        'logradouro',
        'cep',
        'cidade',
        'estado',
        'numero',
        'complemento',
        'cargo_id',
    ],
]); ?>
