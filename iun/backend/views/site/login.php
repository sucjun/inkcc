<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-wrapper">
    <a href="index.html">
        <img class="logo" src="<?= Yii::$app->request->baseUrl ?>/img/logo-white.png">
    </a>

    <div class="box">
        <div class="content-wrap">
            <h6><?= Html::encode($this->title) ?></h6>

            <?php
                $form = ActiveForm::begin(['id' => 'login-form']);

                echo $form->field($model, 'username');

                echo $form->field($model, 'password')->passwordInput();
            ?>
            <div class="remember">
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>


        </div>
    </div>
</div>
