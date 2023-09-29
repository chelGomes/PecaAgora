<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>

<?= $form->field($funcionario, 'nome')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'cpf')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'logradouro')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'cep')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'cidade')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'estado')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'numero')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'complemento')->textInput(['maxlength' => true]) ?>
<?= $form->field($funcionario, 'cargo_id')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
