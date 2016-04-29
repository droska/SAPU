<?php
/* @var $this AuditoriaController */
/* @var $data Auditoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rmo_mol_id')); ?>:</b>
	<?php echo CHtml::encode($data->rmo_mol_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rmo_roe_id')); ?>:</b>
	<?php echo CHtml::encode($data->rmo_roe_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruo_roe_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruo_roe_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruo_uso_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruo_uso_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('err_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->err_codigo); ?>
	<br />


</div>