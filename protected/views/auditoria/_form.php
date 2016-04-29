<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'auditoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rmo_mol_id'); ?>
		<?php echo $form->textField($model,'rmo_mol_id'); ?>
		<?php echo $form->error($model,'rmo_mol_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rmo_roe_id'); ?>
		<?php echo $form->textField($model,'rmo_roe_id'); ?>
		<?php echo $form->error($model,'rmo_roe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruo_roe_id'); ?>
		<?php echo $form->textField($model,'ruo_roe_id'); ?>
		<?php echo $form->error($model,'ruo_roe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruo_uso_id'); ?>
		<?php echo $form->textField($model,'ruo_uso_id'); ?>
		<?php echo $form->error($model,'ruo_uso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'err_codigo'); ?>
		<?php echo $form->textField($model,'err_codigo'); ?>
		<?php echo $form->error($model,'err_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->