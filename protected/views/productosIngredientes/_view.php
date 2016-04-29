<?php
/* @var $this ProductosIngredientesController */
/* @var $data ProductosIngredientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->pro_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ige_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->ige_codigo); ?>
	<br />


</div>