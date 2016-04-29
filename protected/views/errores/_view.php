<?php
/* @var $this ErroresController */
/* @var $data Errores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicacion')); ?>:</b>
	<?php echo CHtml::encode($data->indicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manejador')); ?>:</b>
	<?php echo CHtml::encode($data->manejador); ?>
	<br />


</div>