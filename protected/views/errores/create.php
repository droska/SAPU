<?php
/* @var $this ErroresController */
/* @var $model Errores */

$this->breadcrumbs=array(
	'Errores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Errores', 'url'=>array('index')),
	array('label'=>'Manage Errores', 'url'=>array('admin')),
);
?>

<h1>Create Errores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>