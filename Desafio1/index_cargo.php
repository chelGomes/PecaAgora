<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Lista de Cargos';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => new \yii\data\ArrayDataProvider([
        'allModels' => $cargos,
    ]),
    'columns' => [
        'id',
        'nome',
    ],
]); ?>
