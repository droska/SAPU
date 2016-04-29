<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */

$this->breadcrumbs=array(
	'Productos Ingredientes'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ProductosIngredientes', 'url'=>array('index')),
	array('label'=>'Create ProductosIngredientes', 'url'=>array('create')),
	array('label'=>'Update ProductosIngredientes', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ProductosIngredientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductosIngredientes', 'url'=>array('admin')),
);
?>

<h1>View ProductosIngredientes #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'pro_codigo',
		'ige_codigo',
	),
)); ?>
