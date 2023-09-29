<?php

use yii\helpers\Html;

$this->title = 'Inserir Funcionário';
$this->params['breadcrumbs'][] = ['label' => 'Lista de Funcionários', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', ['funcionario' => $funcionario]) ?>