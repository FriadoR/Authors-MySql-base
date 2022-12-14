<?php
/* @var $this yii\web\View */
/* $var $model app\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Update Author #ID: <?php echo $model->id; ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'first_name'); ?>

<?php echo $form->field($model, 'last_name'); ?>

<?php echo $form->field($model, 'birth_date'); ?>

<?php echo $form->field($model, 'rating'); ?>

<?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end();
