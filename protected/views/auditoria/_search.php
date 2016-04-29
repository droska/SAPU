<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmo_mol_id'); ?>
		<?php echo $form->textField($model,'rmo_mol_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmo_roe_id'); ?>
		<?php echo $form->textField($model,'rmo_roe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruo_roe_id'); ?>
		<?php echo $form->textField($model,'ruo_roe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruo_uso_id'); ?>
		<?php echo $form->textField($model,'ruo_uso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'err_codigo'); ?>
		<?php echo $form->textField($model,'err_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->