<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-ingredientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_codigo'); ?>
		<?php echo $form->textField($model,'pro_codigo'); ?>
		<?php echo $form->error($model,'pro_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ige_codigo'); ?>
		<?php echo $form->textField($model,'ige_codigo'); ?>
		<?php echo $form->error($model,'ige_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->