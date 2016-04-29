<?php
/* @var $this ErroresController */
/* @var $model Errores */

$this->breadcrumbs=array(
	'Errores'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Errores', 'url'=>array('index')),
	array('label'=>'Create Errores', 'url'=>array('create')),
	array('label'=>'Update Errores', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Errores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Errores', 'url'=>array('admin')),
);
?>

<h1>View Errores #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'indicacion',
		'manejador',
	),
)); ?>
