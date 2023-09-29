<?php
namespace app\controllers;

use Yii;
use app\models\Cargo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CargoController extends Controller
{
    // Ação para criar um novo cargo
    public function actionCreate()
    {
        $model = new Cargo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    // Ação para atualizar um cargo existente
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    // Outras ações, como visualizar, excluir, listar, podem ser adicionadas aqui
}
