<?php
/* @var $this ErroresController */
/* @var $model Errores */

$this->breadcrumbs=array(
	'Errores'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Errores', 'url'=>array('index')),
	array('label'=>'Create Errores', 'url'=>array('create')),
	array('label'=>'View Errores', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Errores', 'url'=>array('admin')),
);
?>

<h1>Update Errores <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>