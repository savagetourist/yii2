<?php
use yii\widgets\ActiveForm;
use yii\Helpers\Html;
?>
<h1>Test Action</h1>

<?php
    if(Yii::$app->request->isAjax ){
        debug($_GET);
    }
?>
<?php if (Yii::$app->session->hasFlash('succes') ):?>
<div class="alert alert-success alert-dismissible show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <?php echo Yii::$app->session->getFlash('succes');?> 
</div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error') ):?>
<div class="alert alert-danger alert-dismissible show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <?php echo Yii::$app->session->getFlash('error');?> 
</div>
<?php endif; ?>
<?php
    $form = ActiveForm::begin(['options' => ['id' => 'testform', 'class' => 'form']])
?>
<?= $form->field($model, 'name')/*->label('Имя')->passwordInput() */?>
<?= $form->field($model, 'email')->input('email') ?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= $form->field($model, 'text')/*->label('Текст сообщения')*/->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-succes'])?>
<?php
    $form = ActiveForm::end()
?>