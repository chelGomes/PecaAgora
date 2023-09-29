// controllers/FuncionarioController.php
<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Funcionario;
use yii\web\NotFoundHttpException;

class FuncionarioController extends Controller
{
    public function actionIndex()
    {
        $funcionarios = Funcionario::find()->all();
        return $this->render('index', ['funcionarios' => $funcionarios]);
    }

    public function actionCreate()
    {
        $funcionario = new Funcionario();

        if ($funcionario->load(Yii::$app->request->post()) && $funcionario->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', ['funcionario' => $funcionario]);
    }

    public function actionUpdate($id)
    {
        $funcionario = $this->findModel($id);

        if ($funcionario->load(Yii::$app->request->post()) && $funcionario->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', ['funcionario' => $funcionario]);
    }
}
