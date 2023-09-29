<?php

use yii\helpers\Html;

$this->title = 'Alterar Funcionário: ' . $funcionario->nome;
$this->params['breadcrumbs'][] = ['label' => 'Lista de Funcionários', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $funcionario->nome, 'url' => ['view', 'id' => $funcionario->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', ['funcionario' => $funcionario]) ?>
